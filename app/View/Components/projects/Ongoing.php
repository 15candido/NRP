<?php

namespace App\View\Components\projects;

use Illuminate\View\Component;

class Ongoing extends Component
{
    public $projects;

    public function __construct($projects)
    {
        $this->projects = $projects;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.projects.ongoing');
    }
}
