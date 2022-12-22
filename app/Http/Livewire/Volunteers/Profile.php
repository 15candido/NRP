<?php

namespace App\Http\Livewire\Volunteers;

use Livewire\Component;

class Profile extends Component
{
    public $volunteer, $openModal = false, $formId; 

    public function mount($volunteer)
    {
        $this->formId = $volunteer->id;
    }

    protected $rules = [
        '$volunteer.status' => 'required',
    ];

    public function openModalToProfileVolunteer(){
       
        $this->resetErrorBag();
        $this->openModal = true;
    }

    // Enable or Disable The Volunteer
    public function status()
    {
        
        if ($this->volunteer->status == true)
        {
            
            $this->volunteer->update([

                // Update Volunteer Status
                'status' => $this->volunteer->status = false,
            ]);

            // Emit Browser Event Before Disable Volunteer
            $this->emit('updated', [

                'title'         => 'A conta do/a '.$this->volunteer->name.' foi desativado/a com sucesso!',
                'icon'          => 'success',
                'iconColor'     => 'green'
            ]);

        }      
        else 
        {
            $this->volunteer->update([

                // Update Volunteer Status
                'status' => $this->volunteer->status = true,
            ]);

            // Emit Browser Event Before Enale Volunteer
            $this->emit('updated', [

                'title'         => 'A conta do/a '.$this->volunteer->name.' foi ativado/a com sucesso!',
                'icon'          => 'success',
                'iconColor'     => 'green'
            ]);

        }

        $this->emit('saved');
        $this->reset();

    }

    public function render()
    {
        return view('livewire.volunteers.profile');
    } 
}
