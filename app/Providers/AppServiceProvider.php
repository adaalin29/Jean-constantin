<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Config;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale(app()->getLocale());
        setlocale(LC_TIME,'ro_RO');
    }
}
