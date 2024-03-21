<?php

namespace App\Services\Admin;

use Illuminate\Support\Facades\Storage;
use App\FilePath;
use App\Models\App;
use App\Models\AppVersion;
use DB;

class AppService
{

    public function __construct()
    {
    }

    public function getByOptions($dataRequest)
    {
        $model = App::with(['project', 'user', 'versions', 'latestVersion'])->latest('id');

        if (isset($dataRequest['project_id'])) {
            $model = $model->where('project_id', $dataRequest['project_id']);
        }

        if (isset($dataRequest['id'])) {
            $model = $model->where('id', $dataRequest['id']);
        }

        if (isset($dataRequest['platform'])) {
            $model = $model->where('platform', $dataRequest['platform']);
        }

        if (isset($dataRequest['environment'])) {
            $model = $model->where('environment', $dataRequest['environment']);
        }

        $apps = $model = $model->get();
        return $this->mapApps($apps);
    }

    public function getVersionByOptions($dataRequest)
    {
        $model = AppVersion::with(['project', 'user', 'versions'])->latest('created_at');

        if (isset($dataRequest['project_id'])) {
            $model = $model->where('project_id', $dataRequest['project_id']);
        }

        if (isset($dataRequest['id'])) {
            $model = $model->where('id', $dataRequest['id']);
        }

        if (isset($dataRequest['platform'])) {
            $model = $model->where('platform', $dataRequest['platform']);
        }

        if (isset($dataRequest['environment'])) {
            $model = $model->where('environment', $dataRequest['environment']);
        }

        if (isset($dataRequest['action']) && $dataRequest['action'] == 'get') {
            return $model = $model->get()->toArray();
        } else {
            return $model = $model->paginate(isset($dataRequest['limit']) ? $dataRequest['limit'] : 20);
        }
    }

    public function getApp($id)
    {
        $model = App::with(['versions'])->find($id);
        $model->versions = $this->mapVersions($model->versions);
        return $model;
    }

    private function mapApps($apps)
    {
        $mappedApps = $apps->map(function ($app) {
            if (isset($app->latestVersion)) {
                $latestVersion = $app->latestVersion;
                $url = $latestVersion->url;
                $extension = pathinfo($url, PATHINFO_EXTENSION);
                $environment = $latestVersion->environment;

                $qrCodeData = $url;
                $isAndroid = $extension !== "plist";
                $isRelease = $environment === "Release";

                if (!$isAndroid) {
                    $domain = "https://" . request()->getHost();
                    $qrCodeData = $domain . '/qrCode?link=' . $url;
                }
                
                $created = formatDate($latestVersion->created_at, 'd/m/Y H:i');
                $projectName = $app->project->name;
                $version = $latestVersion->version;
                $build = $latestVersion->build_number;

                $app->data = html_entity_decode($qrCodeData, ENT_QUOTES, 'UTF-8');
                $imageType = $isAndroid ? ($isRelease ? 'android-release.png' : 'android.png') : ($isRelease ? 'ios-release.png' : 'ios.webp');
                $app->image = getFileVersion('/assets/images/' . $imageType);
                $app->title = "$projectName    $created    $version+$build";
            }
            return $app;
        });

        return $mappedApps;
    }

    private function mapVersions($versions)
    {
        $mappedVersions = $versions->map(function ($buildVersion) {
                $app = $buildVersion->app; 
                $url = $buildVersion->url;
                $extension = pathinfo($url, PATHINFO_EXTENSION);
                $environment = $buildVersion->environment;

                $qrCodeData = $url;
                $isAndroid = $extension !== "plist";
                $isRelease = $environment === "Release";

                if (!$isAndroid) {
                    $domain = "https://" . request()->getHost();
                    $qrCodeData = $domain . '/qrCode?link=' . $url;
                }
                
                $created = formatDate($buildVersion->created_at, 'd/m/Y H:i');
                $projectName = $app->project->name;
                $version = $buildVersion->version;
                $build = $buildVersion->build_number;

                $buildVersion->data = html_entity_decode($qrCodeData, ENT_QUOTES, 'UTF-8');
                $imageType = $isAndroid ? ($isRelease ? 'android-release.png' : 'android.png') : ($isRelease ? 'ios-release.png' : 'ios.webp');
                $buildVersion->image = getFileVersion('/assets/images/' . $imageType);
                $buildVersion->title = "$projectName    $created    $version+$build";

                $buildVersion->content = $this->prepareVersionContent($buildVersion->details);

            return $buildVersion;
        });

        return $mappedVersions;
    }

    private function prepareVersionContent($details)
    {
        $data = [];
        foreach ($details as $detail)
        {
            $data[$detail->type] = $detail->content;
        }
        return json_encode($data);
    }
}
