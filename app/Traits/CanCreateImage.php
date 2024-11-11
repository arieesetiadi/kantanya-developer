<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait CanCreateImage
{
    public function createImage(string $filePath, string $uploadPath = '/'): ?string
    {
        $imageFile = File::get($filePath);

        $extension = pathinfo($filePath, PATHINFO_EXTENSION);

        $fileName = Str::ulid() . '.' . strtolower($extension);
        $fullFilePath = $uploadPath . '/' . $fileName;

        Storage::put($fullFilePath, $imageFile);

        return $fullFilePath;
    }
}
