<?php

namespace App\Http\Livewire\Volunteers;

use Livewire\Component;

class Edit extends Component
{
    public $volunteer, $openModal=false, $formId; 

    public function mount($volunteer)
    {
        $this->formId = $volunteer->id;
    }

    protected $rules = [

        'volunteer.name'          => ['required', 'unique:volunteers,name', 'min:5', 'max:150'],
        'volunteer.phone'         => ['required', 'unique:volunteers,phone', 'min:9', 'max:18'],
        'volunteer.email'         => ['required', 'regex:/(.+)@(.+)\.(.+)/i', 'unique:volunteers,email', 'min:10', 'max:255'],
        'volunteer.address'       => ['required', 'min:5', 'max:255'],
        'volunteer.location'      => ['required', 'min:5', 'max:15'],
        'volunteer.postcode'      => ['required', 'min:7', 'max:15'],
        'volunteer.motivation'    => ['required', 'min:80', 'max:450'],
    ];

    public function updated($proprietyName)
    {
        $this->validateOnly($proprietyName);
    }

    public function openModalToUpdateVolunteer()
    {
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function update()
    {
        $this->volunteer->update([
            'name'          => $this->volunteer->name,
            'phone'         => $this->volunteer->phone,
            'email'         => $this->volunteer->email,
            'address'       => $this->volunteer->address,
            'location'      => $this->volunteer->location,
            'postcode'      => $this->volunteer->postcode,
            'motivation'    => $this->volunteer->motivation,
        ]);

        $this->emit('updated', [
            'title'         => 'A informação foi atualizada com sucesso!',
            'icon'          => 'success',
            'iconColor'     => 'green'
        ]);

        $this->emit('saved');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.volunteers.edit');
    }
}
