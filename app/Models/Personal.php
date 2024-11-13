<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Arr;

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

    protected function whatsappUrl(): Attribute
    {
        return Attribute::make(
            get: fn() => 'https://wa.me/' . $this->phone,
        );
    }

    protected function instagramUsername(): Attribute
    {
        return Attribute::make(
            get: fn() => trim(Arr::last(explode('/', $this->instagram_url)))
        );
    }

    protected function githubUsername(): Attribute
    {
        return Attribute::make(
            get: fn() => trim(Arr::last(explode('/', $this->github_url)))
        );
    }

    protected function linkedinUsername(): Attribute
    {
        return Attribute::make(
            get: fn() => trim(Arr::last(explode('/', $this->linkedin_url)))
        );
    }

    protected function codewarsUsername(): Attribute
    {
        return Attribute::make(
            get: fn() => trim(Arr::last(explode('/', $this->codewars_url)))
        );
    }
}
