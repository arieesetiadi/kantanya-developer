<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Personal extends Model
{
    protected $table = 'personal';

    protected static function boot()
    {
        parent::boot();

        static::updating(function (self $model) {
            if ($model->isDirty('resume_path') && ($model->getOriginal('resume_path') !== null)) {
                Storage::delete($model->getOriginal('resume_path'));
            }
        });

        static::deleted(function (self $model) {
            if ($model->getOriginal('resume_path') !== null) {
                Storage::delete($model->getOriginal('resume_path'));
            }
        });
    }

    protected function resumeUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => asset('storage/' . $this->resume_path),
        );
    }
}
