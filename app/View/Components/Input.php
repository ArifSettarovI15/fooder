<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $options;
    public $type;
    public $mod;
    public $size;
    public $placeholder;
    public $icon_left;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $type = 'text', $mod = 'primary', $size = 'md', $placeholder='', $iconLeft='')
    {
        $this->name = $name;
        $this->type = $type;
        $this->mod  = $mod;
        $this->size = $size;
        $this->placeholder = $placeholder;
        $this->icon_left = $iconLeft;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('elements.input.input');
    }
}
