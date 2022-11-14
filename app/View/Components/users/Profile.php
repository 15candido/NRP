<?php

namespace App\View\Components\users;

use Illuminate\View\Component;

class Profile extends Component
{
   public $profile;
    public function __construct($profile)
    {
        $this-> profile = $profile;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.users.profile');
    }
}
