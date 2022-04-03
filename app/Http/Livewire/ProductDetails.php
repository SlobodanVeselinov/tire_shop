<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductDetails extends Component
{
    public $product;


    public function render()
    {
        return view('livewire.product-details');
    }
}


