<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class new_component extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:component {name}';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Создает новый компонент';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $component_name = $this->argument('name');
        $path = base_path().'/resources/views/components/';
        if (!file_exists($path)){
            mkdir($path);
        }
        if (file_exists($path.$component_name.'/')){
            echo "Error: Component $component_name already exists"; exit;
        }else{
            mkdir($path.$component_name.'/');
            $file = fopen($path.$component_name.'/_'.$component_name.'.scss', 'w');
            $scss_filename = './resources/views/components/'.$component_name.'/_'.$component_name.'.scss';
            fclose($file);
            $file = fopen($path.$component_name.'/_'.$component_name.'.js', 'w');
            $js_filename = '../views/components/'.$component_name.'/_'.$component_name.'.js';
            fclose($file);
            $file = fopen($path.$component_name.'/'.$component_name.'.blade.php', 'w');
            fclose($file);
            $assets = base_path().'/resources/';
            $css = fopen($assets.'/css/app.scss', 'a+');
            fwrite($css, '@import "'.$scss_filename.'");');
            fclose($css);
            $js = fopen($assets.'/js/app.js', 'a+');
            fwrite($js, 'require ("'.$js_filename.'");');
            fclose($js);

        }
        echo 'Component has been created';
        return true;
    }
}
