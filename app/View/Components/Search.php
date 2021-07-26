<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Search extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $sendto;
    public $via;
    public function __construct($sendto, $via)
    {
        $this->sendto = $sendto;
        $this->via    = $via;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search');
    }
}
