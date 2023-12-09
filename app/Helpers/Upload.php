<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

function uploadFunction(?UploadedFile $file, string $path, ?string $oldFile = null, ?string $rename = null)
{
    if ($file instanceof UploadedFile && $file->isValid()) {
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $name = empty($rename) ? $originalName : $rename . '.' . $extension;

        $name = Str::of($name)->replaceMatches('/\s/u', '_')->__toString();

        $newPath = $path . '/' . now()->format("YmdHis");

        if ($oldFile && Storage::exists($oldFile)) {
            Storage::delete($oldFile);
        }

        $newPath = $file->storeAs($newPath, $name);

        return Storage::url($newPath);
    }

    return '';
}
