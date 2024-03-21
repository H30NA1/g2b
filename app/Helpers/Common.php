<?php

use Carbon\Carbon;

function getFileVersion($file)
{
    $filePath = public_path($file);

    if (file_exists($filePath)) {
        return "{$file}?v=" . date("YmdHis", filemtime($filePath));
    }

    return $file;
}


function formatDate($date, $format = 'Y-m-d')
{
    if (isset($date) && !empty($date)) {
        $carbonDate = Carbon::parse($date);

        switch ($format) {
            case 'Y-m-d':
                return $carbonDate->format('Y-m-d');
            case 'd/m/Y':
                return $carbonDate->format('d/m/Y');
            case 'F j, Y':
                return $carbonDate->format('F j, Y');
            case 'H:i:s':
                return $carbonDate->format('H:i:s');
            default:
                return $carbonDate->format($format);
        }
    }

    return null;
}

function displayTimeAgo($dateTime)
{
    // Convert the given date and time string to a Carbon instance
    $dateTime = Carbon::parse($dateTime);

    // Calculate the difference between the current time and the given time
    $difference = $dateTime->diffForHumans();

    return $difference;
}

function getUserStatus($status)
{
    $data = [];
    $status = (int) $status;
    switch ($status) {
        case 0:
            $data = [
                'status' => 'danger',
                'label' => 'Inactive'
            ];
            break;
        case 1:
            $data = [
                'status' => 'success',
                'label' => 'Active'
            ];
            break;
        case 2:
            $data = [
                'status' => 'success',
                'label' => 'Verified'
            ];
            break;
        case 3:
            $data = [
                'status' => 'danger',
                'label' => 'Pending'
            ];
            break;
        case 4:
            $data = [
                'status' => 'danger',
                'label' => 'Need Review'
            ];
            break;
        case 5:
            $data = [
                'status' => 'danger',
                'label' => 'Blocked'
            ];
            break;
        default:
            $data = [
                'status' => 'danger',
                'label' => 'Inactive'
            ];
            break;
    }
    return $data;
}

/**
 * Get all routes in the application excluding specific route names.
 *
 * @return array<string>
 */
function getRoutes(): array
{
    $excludedRoutes = [
        'passport',
        'sanctum',
        'ignition',
        'null',
        'laravel-countries'
    ];

    return array_values(collect(app('router')->getRoutes())
        ->reject(function ($route) use ($excludedRoutes) {
            $routeName = $route->getName();
            return $routeName && collect($excludedRoutes)->contains(function ($excludedRoute) use ($routeName) {
                return str_starts_with($routeName, $excludedRoute);
            });
        })
        ->map(function ($route) {
            return $route->getName();
        })
        ->filter()
        ->toArray());
}

function calculateProjectPercent($project)
{
    $tasks = $project->remainingTasks->count();
    $completeTasks = $project->tasks->where('status', 'resolved')->count();
    if ($tasks > 0)
        return round((($completeTasks / $tasks) * 100));
    return 0;
}

function mapApp($version)
{
    $url = $version->url;
    $extension = pathinfo($url, PATHINFO_EXTENSION);
    $environment = $version->environment;

    $qrCodeData = "";
    $isAndroid = $extension !== "plist";
    $isRelease = $environment === "Release";

    if ($isAndroid) {
        $qrCodeData = asset("storage/$url");
    } else {
        $domain = "https://" . request()->getHost();
        $qrCodeData = $domain . '/qrCode?link=' . $url;
    }

    $created = formatDate($version->created_at, 'd/m/Y H:i');
    $projectName = $version->app->project->name;
    $version = $version->version;
    $build = $version->build_number;

    $version->app->data = html_entity_decode($qrCodeData, ENT_QUOTES, 'UTF-8');
    $imageType = $isAndroid ? ($isRelease ? 'android-release.png' : 'android.png') : ($isRelease ? 'ios-release.png' : 'ios.webp');
    $version->app->image = getFileVersion('/assets/images/' . $imageType);
    $version->app->title = "$projectName    $created    $version+$build";

    return $version;
}
