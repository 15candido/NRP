<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class RegisterNewsletter extends Component
{
    public $email;

    protected $rules = [        
        'email' => ['required', 'unique:newsletters,email'],
    ];

    public function update($proprietyName)
    {
        $this->validateOnly($proprietyName);
    }

    public function register()
    {
        $this->validate();

        Newsletter::create([
            'email' => $this->email
        ]);

        session()->flash('success', 'A submissão foi um sucesso. Um abraço de agradecimento por estar connosco!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.register-newsletter');
    }
}
