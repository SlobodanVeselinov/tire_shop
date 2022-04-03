<?php

namespace App\Http\Livewire\Modals;

use App\Models\Product;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;


class AddQuantity extends ModalComponent
{
    public Product $product;
    public $new_quantity;

    protected $rules = [
        'new_quantity' => 'required',
    ];

    public function mount(Product $product){
        $this->product = $product;
    }

    protected $listeners =['closeModal' => 'return'];

    public function return(){
        return redirect('admin/product/'. $this->product->id);
    }

    public function addQuantity(){
        $this->validate();
        $this->product->quantity = $this->product->quantity + $this->new_quantity;
        $this->product->save();
        $this->emit('closeModal');
        $this->dispatchBrowserEvent('swal:productUpdated', [
                'type' => 'success',  
                'message' => 'Updated successfully!', 
            ]);
        return redirect('admin/product/'.$this->product->id);   
    }



    public function render()
    {
        return view('livewire.modals.add-quantity');
    }
}
