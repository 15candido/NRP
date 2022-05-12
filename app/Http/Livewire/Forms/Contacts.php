<?php

namespace App\Http\Livewire\Forms;

use App\Models\ContactForm;
use Livewire\Component;

class Contacts extends Component
{
    public $name;
    public $email;
    public $form_content;

    public $show = true;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'form_content' => 'required|min:5'
    ];

    public function render()
    {
        return view('livewire.forms.contacts');
    }

    public function send_contact_form()
    {
        $this->validate();

        ContactForm::create([
            'name' => $this->name,
            'email' => $this->email,
            'form_content' => $this->form_content
        ]);

        $this->name = "";
        $this->email = "";
        $this->form_content = "";

        $this->show = false;

    }
}
