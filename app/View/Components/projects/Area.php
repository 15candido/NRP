<?php

namespace App\View\Components\projects;

use Illuminate\View\Component;

class Area extends Component
{
    public $areas;
    public function __construct($areas)
    {
        $this->areas = $areas;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projects.area');
    }
}
