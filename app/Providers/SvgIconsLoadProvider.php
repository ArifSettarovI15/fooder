<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class SvgIconsLoadProvider extends ServiceProvider
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
        Blade::directive('svg', function($arguments) {
            // Funky madness to accept multiple arguments into the directive
            list($path, $width, $height, ) = array_pad(explode(',', trim($arguments, "() ")), 3, '');
            $path = trim($path, "' ");
            if (!strpos($path, '.svg')){
                $path.='.svg';
            }

            $width = trim($width, "' ");
            $height = trim($height, "' ");
            if (!$height){
                $height = $width;
            }

            $svg = new \DOMDocument();
            if (!file_exists(public_path('images/svg/'.$path))) {
                return '';
            }
            $svg->load(public_path('images/svg/'.$path));
            $output = $svg->saveXML($svg->documentElement);

            return "<div class='svg-icon' style='width: {$width}px; height: {$height}px;'>$output</div>";
        });
    }
}
