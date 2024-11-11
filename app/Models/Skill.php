<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;

class Skill extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::updating(function (self $model) {
            if ($model->isDirty('icon_path') && ($model->getOriginal('icon_path') !== null)) {
                Storage::delete($model->getOriginal('icon_path'));
            }
        });

        static::deleted(function (self $model) {
            if ($model->getOriginal('icon_path') !== null) {
                Storage::delete($model->getOriginal('icon_path'));
            }
        });
    }

    protected function iconUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => asset('storage/' . $this->image_path),
        );
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true);
    }
}
