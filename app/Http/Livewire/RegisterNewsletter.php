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
        $validatedData = $this->validate();

        Newsletter::create($validatedData);

        $this->dispatchBrowserEvent('create',[
            'title'         => 'A inscrição foi um sucesso!',
            'icon'          => 'success',
            'iconColor'     => 'green', 
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.register-newsletter');
    }
}
