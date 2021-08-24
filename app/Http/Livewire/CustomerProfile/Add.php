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

    protected $validationAttributes = [
        'customer.name' => 'Name',
        'customer.company' => 'Business Name',
        'customer.contact' => 'Contact Number',
        'customer.email' => 'Email Address',
        'customer.address' => 'Address',
        'customer.location' => 'Location',
        'customer.referral_contact' => 'Referral Contact',
        'customer.referral_details' => 'Referral Details',
        'customer.referral_address' => 'Referral Address',
        'customer.remarks' => 'Remarks',
        'customer.current_status' => 'Current Status'
    ];

    protected $rules = [
        'customer.name' => 'required|string',
        'customer.company' => 'required|string',
        'customer.contact' => 'required|integer',
        'customer.email' => 'nullable|email',
        'customer.address' => 'nullable|string',
        'customer.location' => 'nullable',
        'customer.referral_contact' => 'nullable|integer',
        'customer.referral_details' => 'nullable',
        'customer.referral_address' => 'nullable|alpha_num',
        'customer.remarks' => 'nullable',
        'customer.current_status' => 'required'
    ];

    public function save()
    {
        $this->validate();
        dd($this->customer);
    }
}
