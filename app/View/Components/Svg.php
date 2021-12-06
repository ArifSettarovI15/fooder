<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Component;

class Svg extends Component
{

    public $name;
    public $width;
    public $height;
    public $class;
    public $svg_data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $width = 0, $height = 0, $class='')
    {
        $this->name = $name;
        $this->width = $width;
        $this->height = $height;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        if (!$this->width) {
            $this->width = 'auto';
        }
        if (!$this->height) {
            $this->height = $this->width;
        }

        $svg = new \DOMDocument();
        if (!file_exists(public_path('images/svg/' . $this->name . '.svg'))) {
            return '';
        }
        $svg->load(public_path('images/svg/' . $this->name . '.svg'));
        $this->svg_data = $svg->saveXML($svg->documentElement);
        $this->svg_data = Blade::compileString($this->svg_data);
        return view('elements.svg.svg');
    }
}
