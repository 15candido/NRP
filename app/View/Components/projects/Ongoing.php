<?php

namespace App\View\Components\projects;

use Illuminate\View\Component;

class Ongoing extends Component
{
   public $ongoingProjects;
    public function __construct($ongoingProjects)
    {
        $this->ongoingProjects = $ongoingProjects;
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
