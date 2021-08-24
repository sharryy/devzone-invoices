<?php

namespace App\Http\Livewire\CustomerProfile;

use Livewire\Component;

class Add extends Component
{
    public $customer = [
        'is_referred' => false
    ];

    public function render()
    {
        return view('livewire.customer-profile.add');
    }

    public function save()
    {

    }
}
