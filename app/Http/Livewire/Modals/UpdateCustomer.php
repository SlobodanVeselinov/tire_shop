<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Customer;

class UpdateCustomer extends ModalComponent
{
    public Customer $customer;

    protected $listeners =[
        'closeModal' => 'return'
    ];

    public function return(){
        return redirect('admin/customer');
    }

    protected $rules = [
        'customer.name' => 'required',
        'customer.date_of_birth' => '',
        'customer.adress' => 'required',
        'customer.city' => 'required',
        'customer.country' => 'required',
        'customer.phone' => 'required',
        'customer.email' => 'email'
    ];

    public function mount(Customer $customer){
        $this->customer = $customer;
    }

    public function updateCustomer(){
        $this->validate();
        $this->customer->save();
        $this->emit('closeModal');
        $this->dispatchBrowserEvent('swal:productUpdated', [
                'type' => 'success',  
                'message' => 'Updated successfully!', 
            ]);
        return redirect('admin/customer');
        
    }


    public function render()
    {
        return view('livewire.modals.update-customer');
    }


    
}
