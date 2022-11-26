<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class RegisterNewsletter extends Component
{
    public $email;

    protected $rules = [        
        'email' => 'required|email|unique:newsletters',
    ];


    public function render()
    {
        return view('livewire.register-newsletter');
    }

    public function add()
    {
        $this->validate();

        Newsletter::create([
            'email' => $this->email
        ]);

        session()->flash('message', 'Email registado com sucesso na nossa newsletter.');

        $this->email = null;
    }
}
