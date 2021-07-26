<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavElement extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $class;
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-element');
    }
}
