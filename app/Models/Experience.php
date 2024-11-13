<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;
use App\Enums\ExperienceType;
use Carbon\Carbon;

class Experience extends Model
{
    protected function timeline(): Attribute
    {
        return Attribute::make(
            get: function () {
                $start = Carbon::make($this->start_date)->year;
                $end = $this->end_date ? Carbon::make($this->end_date)->year : 'Present';
                return $start . ' - ' . $end;
            }
        );
    }

    public function scopePublished(Builder $query): void
    {
        $query->where('is_published', true);
    }

    public function scopeWork(Builder $query): void
    {
        $query->where('type', ExperienceType::Work->value);
    }

    public function scopeEducation(Builder $query): void
    {
        $query->where('type', ExperienceType::Education->value);
    }
}
