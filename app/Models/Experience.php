<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Experience extends Model
{
    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true);
    }
}
