<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\App;
use App\Models\AppDetail;
use App\Models\AppVersion;
use App\Models\AppVersionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Throwable;

class AppUploadController extends Controller
{


    public function __construct()
    {
    }

    public function file(Request $request)
    {
        try {
            DB::beginTransaction();
            $app = $this->uploadAndReadFile($request);

            if (empty($app['package_name'])) {
                abort(404, "app id doesn't exist!");
            }

            $app['environment'] = $request->environment;
            $app['project_id'] = $request->project_id;

            $this->updateVersion($app);
            DB::commit();
            return redirect()->route('web.apps.index')->withStatus(trans('common.create_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            dd($e);
            return redirect()->route('web.apps.index')->withErrors($e->getMessage());
        }
    }

    private function upPath()
    {
        return "/uploads/apk/" . date('Y-m') . '/' . date('d-His');
    }

    private function makeAppLogo($iconBase64, $upPath)
    {
        $filename = 'logo.png';
        $iconBase64 = explode(',', $iconBase64)[1];
        $iconBase64 = str_replace(' ', '+', $iconBase64);
        Storage::put($upPath . '/' . $filename, base64_decode($iconBase64));
        return Storage::disk('url')->url($upPath . '/' . $filename);
    }

    private function uploadAndReadFile(Request $request)
    {
        $file = $request->file('url');
        $extension = $file->getClientOriginalExtension();
        $upPath = $this->upPath();
        $fileUpPath = uploadFunction($file, $upPath, null);
        $appData = $this->readFileContent($fileUpPath, $extension);

        if (!empty($appData['icon'])) {
            $appData['url_image'] = $this->makeAppLogo($appData['icon'], $upPath);
        }

        if ($appData['platform'] == 1) {
            $fileUpPath = $this->platFormIOS($fileUpPath, $appData);
            Storage::deleteDirectory(storage_path('app/public/uploads/extract'));
        }

        // Get the public storage directory path
        $publicStoragePath = storage_path('app/public/');

        // Remove the public storage directory path from the absolute path
        $relativePath = str_replace($publicStoragePath, '', $fileUpPath);

        $appData['url'] = $relativePath;
        return $appData;
    }

    private function readFileContent($fileUpPath, $extention)
    {
        if ($extention == 'ipa') { // IOS
            $command = public_path('pkg-reader') . ' ' . $fileUpPath;
            $json_data = exec($command);
            $json = json_decode($json_data, true);
            $json = [];


            $data['package_name'] = $json['CFBundleIdentifier'];
            $data['version'] = $json['CFBundleShortVersionString'];
            $data['build_number'] = $json['CFBundleVersion'];
            $data['app_name'] = $json['CFBundleName'];
            $data['platform'] = 1;
            if (isset($json['icon'])) {
                $data['icon'] = $json['icon'];
            }
        } else if ($extention == 'apk') { // Android
            $fileUpPath = str_replace(storage_path('app/public/'), '', $fileUpPath);
            $apk = new \ApkParser\Parser($fileUpPath, ['manifest_only' => false]);

            $manifest = $apk->getManifest();
            $permissions = $manifest->getPermissions();
            $application = $apk->getManifest()->getApplication();
            $activities = $application->activities;
            $json = [];
            $data['package_name'] = $manifest->getPackageName();
            $data['version'] = $manifest->getVersionName();
            $data['build_number'] = $manifest->getVersionCode();
            $data['app_name'] = $this->getLabel($apk);
            $data['platform'] = 0;
            $data['content'] = [
                'permission' => $permissions,
                'activity' => $activities
            ];
            // if ($this->getIcon($apk)) {
            //     $data['icon'] = $json['icon'];
            // }
        } else {
            $data['package_name'] = '';
            $data['version'] = '';
            $data['build_number'] = '';
            $data['app_name'] = '';
            $data['platform'] = 2;
            $data['icon'] = '';
        }

        return $data;
    }

    private function saveBase64ImageToFile($base64Image)
    {
        // Generate a unique filename
        $filename = date('Y-m') . '/' . date('d-His') . '-' . uniqid() . '.png';

        // Store the image data using Laravel's Storage
        $filePath = 'uploads/' . $filename;
        Storage::put($filePath, $base64Image);

        // Return the URL of the saved file
        return Storage::url($filePath);
    }


    private function getLabel($apk)
    {
        $labelResourceId = $apk->getManifest()->getApplication()->getLabel();
        return @$apk->getResources($labelResourceId)[0];
    }

    private function createApp($appData)
    {
        $app = App::create([
            'package_name' => $appData['package_name'],
            'user_id' => Auth::id(),
            'name' => $appData['app_name'],
            'platform' => $appData['platform'],
            'url_image' => isset($appData['url_image']) ? Storage::disk('url')->url($appData['url_image']) : null,
            'environment' => $appData['environment'],
            'project_id' => $appData['project_id'],
        ]);

        return $app;
    }

    private function updateVersion($appData)
    {
        try {
            // Retrieve the app by app_id or create a new one if it doesn't exist
            $app = App::where('package_name', $appData['package_name'])->where('project_id', $appData['project_id'])->first();
            if (!$app) {
                $app = $this->createApp($appData);
            }
            // Determine the last upload number
            $lastNumber = AppVersion::where('app_id', $app->id)->max('upload_number') + 1;

            // Prepare data for creating a new AppVersion instance
            $fill = [
                'user_id' => Auth::id(),
                'app_id' => $app->id,
                'url' => isset($appData['url']) ? Storage::disk('url')->url($appData['url']) : null,
                'upload_number' => $lastNumber,
                'url_image' => $appData['url_image'] ?? null,
                'version' => $appData['version'] ?? null,
                'build_number' => $appData['build_number'] ?? null,
                'app_name' => $appData['app_name'] ?? null,
                'environment' => $appData['environment'] ?? null,
                'platform' => $appData['platform'] ?? 0,
            ];

            // Create a new AppVersion instance
            $version = AppVersion::create($fill);

            // Update the url_image field in the App model if necessary
            if ($appData['url_image'] ?? null) {
                $app->update(['url_image' => $appData['url_image']]);
            }

            if (isset($appData['content']) && count($appData['content']) > 0) {
                foreach ($appData['content'] as $key => $detail) {
                    AppVersionDetail::create([
                        'app_version_id' => $version->id,
                        'type' => $key,
                        'content' => json_encode($detail)
                    ]);
                }
            }

            return true;
        } catch (Throwable $e) {
            abort(400, $e->getMessage());
        }
    }

    public function platFormIOS($filePath, $app)
    {
        try {
            $newFileName = pathinfo($filePath, PATHINFO_FILENAME) . ".plist";
            $plistContent = <<<EOD
        <!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">
        <plist version="1.0">
        <dict>
            <key>items</key>
            <array>
                <dict>
                    <key>assets</key>
                    <array>
                        <dict>
                            <key>kind</key>
                            <string>software-package</string>
                            <key>url</key>
                            <string>{$filePath}</string>
                        </dict>
                        <dict>
                            <key>kind</key>
                            <string>display-image</string>
                            <key>url</key>
                            <string>{$app['url_image']}</string>
                        </dict>
                    </array>
                    <key>metadata</key>
                    <dict>
                        <key>bundle-identifier</key>
                        <string>{$app['app_id']}</string>
                        <key>bundle-version</key>
                        <string>{$app['version']}</string>
                        <key>kind</key>
                        <string>software</string>
                        <key>subtitle</key>
                        <string>Gonosen</string>
                        <key>title</key>
                        <string>{$app['app_name']}</string>
                    </dict>
                </dict>
            </array>
        </dict>
        </plist>
        EOD;

            $plistPath = "app/public/{$newFileName}";
            Storage::put($plistPath, $plistContent);

            return $newFileName;
        } catch (\Exception $e) {
            throw $e; // Handle exception according to your application's error handling strategy
        }
    }

    public function app(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $app = $this->uploadAndReadFile($request);
            $app['environment'] = $request->environment;
            $app['project_id'] = $request->project_id;

            if (empty($app['package_name']))
                abort(404, "app id doesn't exist!");

            $this->updateVersion($app['package_name']);
            DB::commit();
            return redirect()->route('web.servers.detail', ['id' => $id])->withStatus(trans('common.update_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.servers.index')->withErrors($e->getMessage());
        }
    }

    public function appVersion(Request $request, $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            DB::commit();
            return redirect()->route('web.servers.index')->withStatus(trans('common.delete_successfully'));
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return redirect()->route('web.servers.index')->withErrors($e->getMessage());
        }
    }
}
