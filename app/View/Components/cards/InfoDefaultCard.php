<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class InfoDefaultCard extends Component
{
    // public $info;
    public function __construct()
    {
        // $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.info-default-card');
    }
}
