<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Btn extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $color;
    public $type;
    public $text;
    public function __construct($color, $type, $text)
    {
        $this->color = $color;
        $this->type  = $type;
        $this->text  = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn');
    }
}
