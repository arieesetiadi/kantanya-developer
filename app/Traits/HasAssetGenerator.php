<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait HasAssetGenerator
{
    public function createAsset(string $filePath, string $uploadPath = '/'): ?string
    {
        $file = File::get($filePath);
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        $fileName = Str::ulid() . '.' . strtolower($extension);
        $fullFilePath = $uploadPath . '/' . $fileName;

        Storage::put($fullFilePath, $file);

        return $fullFilePath;
    }
}
