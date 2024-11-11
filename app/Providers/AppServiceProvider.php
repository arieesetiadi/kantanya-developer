<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        Select::configureUsing(function (Select $select) {
            $select->native(false);
        });

        DatePicker::configureUsing(function (DatePicker $datepicker) {
            $datepicker->native(false);
        });

        FileUpload::configureUsing(function (FileUpload $fileUpload) {
            $fileUpload
                ->openable()
                ->downloadable();
        });
    }
}
