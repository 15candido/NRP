<?php

namespace App\View\Components\cards;

use App\View\Components\content;
use Illuminate\View\Component;

class aboutCardSubtitle extends Component
{
    public $content;
    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.about-card-subtitle');
    }
}
