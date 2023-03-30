<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class RegisterNewsletter extends Component
{
    public $email;

    protected $rules = [
        'email' => ['required', 'regex:/(.+)@(.+)\.(.+)/i', 'unique:newsletters,email'],
    ];

    public function updated($proprietyName)
    {
        $this->validateOnly($proprietyName);
    }

    public function register()
    {
        Newsletter::create([
            'email' => $this->email,
        ]);

        $this->emit('created', [
            'title'         => 'A inscrição foi um sucesso!',
            'icon'          => 'success',
            'iconColor'     => 'green'
        ]);

        $this->emit('saved');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.register-newsletter');
    }
}
