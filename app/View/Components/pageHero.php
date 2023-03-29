<?php

namespace App\View\Components;

use Illuminate\View\Component;

class pageHero extends Component
{
    public $pageHero;
    public function __construct($pageHero)
    {
        $this->pageHero = $pageHero;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-hero');
    }
}
