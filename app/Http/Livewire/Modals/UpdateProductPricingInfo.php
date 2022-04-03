<?php

namespace App\Http\Livewire\Modals;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Product;

class UpdateProductPricingInfo extends ModalComponent
{
    public Product $product;

    protected $rules = [
        'product.purchase_price' => 'required',
        'product.sale_price' => 'required',
        'product.quantity' => 'required',
    ];

    protected $listeners =[
        'closeModal' => 'return'
    ];

    public function return(){
        return redirect('admin/product/'. $this->product->id);
    }


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
        return view('livewire.modals.update-product-pricing-info');
    }


    
}
