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
