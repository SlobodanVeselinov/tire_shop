<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class Customers extends Component
{
    use WithPagination;

    public $term;



    public function deleteCustomer($id){
        $customer = Customer::find($id);
        $customer->delete();
        
    }

    public function updatingTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%'.$this->term.'%';
        $customers = Customer::where('name', 'LIKE', $searchTerm)->paginate(5);
        return view('livewire.customers', compact('customers'));
    }
}
