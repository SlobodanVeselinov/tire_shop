<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Product;

class UpdateProductBasicInfo extends ModalComponent
{
    public Product $product;

        protected $listeners =[
        'closeModal' => 'return'
    ];

    public function return(){
        return redirect('admin/product/'. $this->product->id);
    }


    protected $rules = [
        'product.model' => 'required',
        'product.type' => 'required',
        'product.size' => 'required',
        'product.year_of_production' => 'required'
    ];

    public function mount(Product $product){
        $this->product = $product;
    }

    public function updateProduct(){
        $this->validate();
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
        return view('livewire.modals.update-product-basic-info');
    }


    
}
