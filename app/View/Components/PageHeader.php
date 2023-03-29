<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    //    public $pageHeader;
    public function __construct()
    {
        // $this-> pageHeader = $pageHeader;  
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-header');
    }
}
