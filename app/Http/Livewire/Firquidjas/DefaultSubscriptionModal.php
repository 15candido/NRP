<?php

namespace App\Http\Livewire\Firquidjas;

use App\Models\Person;
use Livewire\Component;

class DefaultSubscriptionModal extends Component
{
    public $name, $email,
        $phone, $iban, $bank,
        $swift, $address, $nif;

    protected $rules = [
        'name'      => ['required', 'unique:people,name', 'min:5', 'max:150'],
        'email'     => ['required', 'regex:/(.+)@(.+)\.(.+)/i', 'unique:people,email', 'min:10', 'max:255'],
        'phone'     => ['required', 'unique:people,phone', 'min:9', 'max:15'],
        'iban'      => ['required', 'unique:people,iban', 'min:34', 'max:34'],
        'bank'      => ['required',  'min:5', 'max:15'],
        'swift'     => ['required', 'unique:people,swift', 'min:8', 'max:11'],
        'address'   => ['required', 'min:7', 'max:255'],
        'nif'       => ['required', 'unique:people,nif', 'min:9', 'max:9']
    ];

    // Real time validation - Rules validation 
    public function updated($proprietyName)
    {
        $this->validateOnly($proprietyName);
    }

    public function subscription()
    {
        Person::create([
            'name'      => $this->name,
            'email'     => $this->email,
            'nif'       => $this->nif,
            'phone'     => $this->phone,
            'iban'      => $this->iban,
            'bank'      => $this->bank,
            'swift'     => $this->swift,
            'address'   => $this->address
        ]);

        $this->emit('created', [
            'title'     => 'A subscrição foi um sucesso!',
            'icon'      => 'success',
            'iconColor' => 'green'
        ]);

        $this->emit('saved');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.firquidjas.default-subscription-modal');
    }
}
