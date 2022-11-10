<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class Menu extends Component
{
//    public $menus;
    public function __construct()
    {
        // $this->menus = $menus;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.menu');
    }
}
