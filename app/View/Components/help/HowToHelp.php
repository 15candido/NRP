<?php

namespace App\View\Components\help;

use Illuminate\View\Component;

class HowToHelp extends Component
{
    public $howToHelp;
    public function __construct($howToHelp)
    {
        $this->howToHelp = $howToHelp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.help.how-to-help');
    }
}
