<?php

namespace App\View\Components\sections;

use Illuminate\View\Component;

class sectionsDescription extends Component
{
    // public $sectionsDescription;
    public function __construct()
    {
        // $this->sectionsDescription = $sectionsDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sections.sections-description');
    }
}
