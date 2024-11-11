<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Personal extends Model
{
    protected $table = 'personal';

    protected static function boot()
    {
        parent::boot();

        static::updating(function (self $model) {
            if ($model->isDirty('resume_path_id') && ($model->getOriginal('resume_path_id') !== null)) {
                Storage::delete($model->getOriginal('resume_path_id'));
            }

            if ($model->isDirty('resume_path_en') && ($model->getOriginal('resume_path_en') !== null)) {
                Storage::delete($model->getOriginal('resume_path_en'));
            }
        });

        static::deleted(function (self $model) {
            if ($model->getOriginal('resume_path_id') !== null) {
                Storage::delete($model->getOriginal('resume_path_id'));
            }

            if ($model->getOriginal('resume_path_en') !== null) {
                Storage::delete($model->getOriginal('resume_path_en'));
            }
        });
    }
}
