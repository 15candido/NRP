<?php

namespace App\Http\Livewire\Volunteers;

use App\Models\Volunteer;
use Livewire\Component;
use Illuminate\Support\Str;

class Register extends Component
{
    public $name, $email, $phone, $address, 
    $location, $postcode, $motivation; 
    // $form = [
    //     'name'          => ' ',
    //     'email'         => ' ',
    //     'phone'         => ' ',
    //     'address'       => ' ', 
    //     'location'      => ' ',
    //     'postcode'      => ' ',
    //     'motivation'    => ' ', 
    // ];

    protected $rules = [

        'name'          => ['required', 'min:3', 'max:10'],
        // 'email'         => ['required', 'regex:/(.+)@(.+)\.(.+)/i', 'unique:newsletters,email'],
        // 'phone'         => ['required', 'unique', 'min:9', 'max:12'], 
        // 'address'       => ['required', 'min:5', 'max:255'], 
        // 'location'      => ['required', 'min:4', 'max:40'],
        // 'postcode'      => ['required', 'min:9', 'max:15'],
        // 'motivation'    => ['required', 'min:25', 'max:255'],
    ];

    public function update($proprietyName)
    {
        $this->validateOnly($proprietyName, [
            
            'name'          => 'required',
            // 'email'         => 'required',
            // 'phone'         => 'required',
            // 'address'       => 'required',
            // 'location'      => 'required', 
            // 'postcode'      => 'required',
            // 'motivation'    => 'required', 
        ]);
    }
   
    public function register(){

        // $this->validate();

        Volunteer::create([
            'name'          => $this->name,
            'slug'          => Str::slug($this->name),
            'email'         => $this->email, 
            'phone'         => $this->phone,
            'address'       => $this->address,
            'location'      => $this->location,
            'postcode'      => $this->postcode,
            'motivation'    => $this->motivation,
        ]);

        session()->flash('success', 'O registo foi um sucesso!');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.volunteers.register');
    }
}
