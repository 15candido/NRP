<?php

namespace App\View\Components\help;

use Illuminate\View\Component;

class Help extends Component
{
   public $help;
    public function __construct($help)
    {
        $this->help = $help;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.help.help');
    }
}
