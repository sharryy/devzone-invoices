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
    ];

    public $customer_referral = [
        'commission_type' => ''
    ];

    public $referral_array = [
        'referral_name', 'referral_contact', 'referral_details', 'referral_address',
        'commission_type', 'rec_otc_percentage', 'rec_mrc_percentage', 'rec_mrc_duration',
        'one_time_commission_percentage'
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
        'customer_referral.commission_type' => 'Commission Type',
        'customer_referral.one_time_commission_percentage' => 'Commission Percentage',
        'customer_referral.is_every_month' => 'Recurring Payment',
        'customer_referral.rec_otc_percentage' => 'OTC Percentage',
        'customer_referral.rec_mrc_percentage' => 'MRC Percentage',
        'customer_referral.rec_mrc_duration' => 'MRC Duration',
        'customer_referral.referral_name' => 'Referral Name',
        'customer_referral.referral_contact' => 'Referral Contact',
        'customer_referral.referral_details' => 'Referral Details',
        'customer_referral.referral_address' => 'Referral Address',
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
        'customer_referral.commission_type' => 'required_if:customer.is_referred,true',
        'customer_referral.one_time_commission_percentage' => 'required_if:customer_referral.commission_type,one-time',
        'customer_referral.is_every_month' => 'nullable',
        'customer_referral.rec_otc_percentage' => 'required_if:customer_referral.commission_type,recurring',
        'customer_referral.rec_mrc_percentage' => 'required_if:customer_referral.commission_type,recurring',
        'customer_referral.referral_name' => 'nullable',
        'customer_referral.referral_contact' => 'nullable|numeric',
        'customer_referral.referral_details' => 'nullable',
        'customer_referral.referral_address' => 'nullable',
    ];

    public function save()
    {
        if ($this->customer['is_referred']) $this->customer['is_every_month'] = $this->toggle_switch;
        $this->validate();
        if ($this->customer['is_every_month'] == true && $this->customer['is_referred']) $this->customer['rec_mrc_duration'] = '';
        $response = Customer::create($this->customer);
        !$response ? session()->flash('error', 'Unknown Error Occurred! Customer not added.') : session()->flash('success', 'Customer Added Successfully.');
        $this->reset('customer');
    }

    public function updatedCustomerIsReferred($value)
    {
        if (!$value)
            $this->reset('customer_referral');
    }
}
