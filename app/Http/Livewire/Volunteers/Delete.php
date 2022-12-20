<?php

namespace App\Http\Livewire\Volunteers;

use Livewire\Component;

class Delete extends Component
{
    public $volunteer, $openModal = false; 

    public function openModalToDeleteVolunteer(){
       
        $this->resetErrorBag();
        $this->openModal = true;
    }

    public function delete() {

        $this->volunteer->delete();

        // $this->dispatchBrowserEvent('volunteerDeleted', [
        //     'title'         => $this->volunteer->name . ',' . ' foi removido da lista dos voluntários',
        //     'icon'          => 'warning', 
        //     'iconColor'     => 'red',
        // ]);

        $this->emit('volunteerDeleted', [
            'title'         => $this->volunteer->name . ',' . ' foi removido da lista dos voluntários',
            'icon'          => 'warning',
            'iconColor'     => 'red'
        ]);

        $this->emitUp('saved');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.volunteers.delete');
    }
}
