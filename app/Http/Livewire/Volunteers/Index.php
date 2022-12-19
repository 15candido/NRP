<?php

namespace App\Http\Livewire\Volunteers;

use App\Models\Volunteer;
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
        $volunteers = Volunteer::search($this->search)
                 ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                 ->paginate($this->perpage); 

        return view('livewire.volunteers.index', 
         [
             'voluntarios' => $volunteers
         ]);
    }
}
