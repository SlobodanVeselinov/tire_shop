<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class CardProduct extends Component
{
    use WithPagination;

    public $search;

    
    public function updatingSearch()
    {
        $this->resetPage();
    }



    public function render()
    {
        $searchTerm = '%'.$this->search.'%';
        $products = Product::where('model', 'LIKE', $searchTerm)->orWhere('size', 'LIKE', $searchTerm)->orWhere('type', 'LIKE', $searchTerm)->latest()->paginate(8);
        return view('livewire.card-product', compact('products'));
    }
}
