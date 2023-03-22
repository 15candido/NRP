<?php

namespace App\Http\Livewire;

use App\Models\Volunteer;
use Livewire\Component;
use Illuminate\Support\Str;

class Modal extends Component
{
    public $name;
    public $email;
    public $phone;
    public $address;
    public $location;
    public $postcode;
    public $motivation;
    public $openModal = false;


    protected $rules = [

        'name'          => ['required', 'unique:volunteers,name', 'min:5', 'max:150'],
        'phone'         => ['required', 'unique:volunteers,phone', 'min:9', 'max:15'],
        'email'         => ['required', 'regex:/(.+)@(.+)\.(.+)/i', 'unique:volunteers,email', 'min:10', 'max:255'],
        'address'       => ['required', 'min:5', 'max:255'],
        'location'      => ['required', 'min:5', 'max:15'],
        'postcode'      => ['required', 'min:7', 'max:15'],
        'motivation'    => ['required', 'min:80', 'max:450'],
    ];

    // Real time validation. Rules validation
    public function updated($proprietyName)
    {
        $this->validateOnly($proprietyName);
    }

    public function openModalToRegisterVolunteer()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function register()
    {
        Volunteer::create([
            'name'  => $this->name,
            'slug'  => Str::slug($this->name),
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'location' => $this->location,
            'postcode' => $this->postcode,
            'motivation' => $this->motivation,
        ]);

        $this->emit('created', [
            'title'         => 'O registo foi um sucesso!',
            'icon'          => 'success',
            'iconColor'     => 'green'
        ]);

        $this->emit('saved');
        $this->reset();
    }
}
