<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;

class Project extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::updating(function (self $model) {
            if ($model->isDirty('images')) {
                $oldImages = $model->getOriginal('images') ?? [];
                $newImages = $model->images ?? [];

                if (is_string($oldImages)) {
                    $oldImages = json_decode($oldImages, true) ?? [];
                }

                if (is_string($newImages)) {
                    $newImages = json_decode($newImages, true) ?? [];
                }

                $imagesToDelete = array_diff($oldImages, $newImages);

                foreach ($imagesToDelete as $imagePath) {
                    if ($imagePath && Storage::exists($imagePath)) {
                        Storage::delete($imagePath);
                    }
                }
            }
        });

        static::deleted(function (self $model) {
            $images = $model->images ?? [];

            if (is_string($images)) {
                $images = json_decode($images, true) ?? [];
            }

            foreach ($images as $imagePath) {
                if ($imagePath && Storage::exists($imagePath)) {
                    Storage::delete($imagePath);
                }
            }
        });
    }

    protected function casts(): array
    {
        return [
            'images' => 'array',
        ];
    }

    protected function imageUrls(): Attribute
    {
        return Attribute::make(
            get: fn() => array_map(fn(string $imagePath) => asset('storage/' . $imagePath), array_reverse($this->images)),
        );
    }

    protected function thumbnailImageUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => Arr::first($this->image_urls),
        );
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true);
    }
}
