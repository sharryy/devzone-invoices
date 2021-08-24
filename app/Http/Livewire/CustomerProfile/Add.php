<?php

namespace App\Http\Livewire\CustomerProfile;

use Livewire\Component;

class Add extends Component
{
    public $is_referral;

    public function render()
    {
        return view('livewire.customer-profile.add');
    }
}
