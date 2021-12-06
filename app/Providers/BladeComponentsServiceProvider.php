<?php

namespace App\Providers;

use App\View\Components\Input;
use App\View\Components\Svg;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('input',Input::class);
        Blade::component('svg', Svg::class);
    }
}
