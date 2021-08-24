<?php

namespace App\Http\Livewire\CustomerProfile;

use App\Models\Customer;
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
        'customer.referral_name' => 'Referral Name',
        'customer.referral_contact' => 'Referral Contact',
        'customer.referral_details' => 'Referral Details',
        'customer.referral_address' => 'Referral Address',
        'customer.remarks' => 'Remarks',
        'customer.current_status' => 'Current Status'
    ];

    protected $rules = [
        'customer.name' => 'required|string',
        'customer.company' => 'required|string',
        'customer.contact' => 'required|numeric',
        'customer.email' => 'nullable|email',
        'customer.address' => 'nullable|string',
        'customer.location' => 'nullable',
        'customer.referral_name' => 'nullable',
        'customer.referral_contact' => 'nullable|numeric',
        'customer.referral_details' => 'nullable',
        'customer.referral_address' => 'nullable',
        'customer.remarks' => 'nullable',
        'customer.current_status' => 'required'
    ];

    public function save()
    {
        $this->validate();
        $response = Customer::create($this->customer);
        !$response ? session()->flash('error', 'Unknown Error Occurred! Customer not added.') : session()->flash('success', 'Customer Added Successfully.');
        $this->reset('customer');
    }
}
