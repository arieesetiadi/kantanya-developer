<?php

namespace App\Enums;

enum ProjectType: string
{
    case WebSite = 'website';
    case WebApp = 'webapp';

    public function label(): string
    {
        return match ($this) {
            self::WebSite => 'Website',
            self::WebApp => 'Web Application',
        };
    }
}
