<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerInfo extends Component
{
    
    public $customer = '';
    
    protected $listeners = ['customerDetails'];

    public function customerDetails($customerId){
        $this->customer = Customer::find($customerId);
    }

    public function render()
    {
        return view('livewire.customer-info');
    }
} 
