<?php

namespace App\Http\Livewire\Volunteers;

use App\Models\Volunteer;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $perPage = 5; 
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true; 

    protected $listeners = [
        'saved' => '$refresh'
    ];

    public function render()
    {
        $volunteers = Volunteer::search($this->search)
            ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
            ->paginate($this->perPage); 

        return view('livewire.volunteers.index', 
         [
             'volunteers' => $volunteers
         ]);
    }
}
