<?php

namespace App\Http\Livewire\Volunteers;

use App\Models\Vulunteer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $perpage = 10; 
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true; 

    public function render()
    {
        return view('livewire.volunteers.index', [
            'voluntarios' => Volunteer::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? true : false)
                -> paginte($this->perpage)
        ]);
    }
}
