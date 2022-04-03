<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;


class CustomerPageTable extends Component
{
    use WithPagination;

    public $term;
    public $customer;

    protected $listeners = ['deleteCustomer' => 'deleteCustomer'];

    public function confirmDeleteCustomer($id){
        $this->dispatchBrowserEvent('swal:confirm', [
                'type' => 'warning',  
                'message' => 'Are you sure?', 
                'text' => 'This can not be undone!',
                'id' => $id
            ]);
    }

    public function deleteCustomer($id){
        $customer = Customer::find($id);
        $customer->delete();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Customer Deleted Successfully!', 
                'text' => 'It will not list on users table soon.'
            ]);
    }

    
    public function updatingTerm()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('livewire.customer-page-table', [
            'customers' => Customer::when($this->term, function($query, $term){
                return $query->where('name', 'LIKE', "%$term%");
            })->orderBy('id', 'desc')->paginate(5)
        ]);
    }
}
