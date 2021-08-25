<?php

namespace App\Http\Livewire\CustomerProfile;

use App\Models\Customer;
use Livewire\Component;

class Add extends Component
{
    public $toggle_switch = false;

    public $customer = [
        'is_referred' => false,
        'current_status' => '',
        'commission_type' => '',
    ];


    public function render()
    {
        return view('livewire.customer-profile.add');
    }

    protected $validationAttributes = [
        'customer.name' => 'Name',
        'customer.company' => 'Business Name',
        'customer.contact' => 'Contact Number',
        'customer.email' => 'Email',
        'customer.starting_date' => 'Starting Date',
        'customer.address' => 'Address',
        'customer.location' => 'Location',
        'customer.remarks' => 'Remarks',
        'customer.current_status' => 'Current Status',
        'customer.is_referred' => 'Referral',
        'customer.ending_date' => 'Ending Date',
        'customer.status_reason' => 'Reason',
        'customer.commission_type' => 'Commission Type',
        'customer.one_time_commission_percentage' => 'Commission Percentage',
        'customer.is_every_month' => 'Recurring Payment',
        'customer.rec_otc_percentage' => 'OTC Percentage',
        'customer.rec_mrc_percentage' => 'MRC Percentage',
        'customer.rec_mrc_duration' => 'MRC Duration',
        'customer.referral_name' => 'Referral Name',
        'customer.referral_contact' => 'Referral Contact',
        'customer.referral_details' => 'Referral Details',
        'customer.referral_address' => 'Referral Address',
    ];

    protected $rules = [
        'customer.name' => 'required|string',
        'customer.company' => 'required|string',
        'customer.contact' => 'required|numeric',
        'customer.email' => 'nullable|email',
        'customer.starting_date' => 'required|date',
        'customer.address' => 'nullable|string',
        'customer.location' => 'nullable',
        'customer.remarks' => 'nullable',
        'customer.current_status' => 'required',
        'customer.is_referred' => 'nullable',
        'customer.ending_date' => 'date|required_if:customer.current_status,dropped',
        'customer.status_reason' => 'string',
        'customer.commission_type' => 'required_if:customer.is_referred,true',
        'customer.one_time_commission_percentage' => 'required_if:customer.commission_type,one-time',
        'customer.is_every_month' => 'nullable',
        'customer.rec_otc_percentage' => 'required_if:customer.commission_type,recurring',
        'customer.rec_mrc_percentage' => 'required_if:customer.commission_type,recurring',
        'customer.rec_mrc_duration' => 'required_if:customer.commission_type,recurring|required_if:customer.is_every_month,false',
        'customer.referral_name' => 'nullable',
        'customer.referral_contact' => 'nullable|numeric',
        'customer.referral_details' => 'nullable',
        'customer.referral_address' => 'nullable',
    ];

    public function save()
    {
        $this->validate();
        $response = Customer::create($this->customer);
        !$response ? session()->flash('error', 'Unknown Error Occurred! Customer not added.') : session()->flash('success', 'Customer Added Successfully.');
        $this->reset('customer');
    }
}
