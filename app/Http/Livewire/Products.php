<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;


class Products extends Component
{
    use WithPagination;

    public $term;

    
    
    public function updatingTerm()
    {
        $this->resetPage();
    }


    public function render()
    {

        return view('livewire.products', [
            'products' => Product::when($this->term, function($query, $term){
                return $query->where('model', 'LIKE', "%$term%")->orWhere('type', 'LIKE', "%$term%")->orWhere('size', 'LIKE', "%$term%");
            })->orderBy('id', 'desc')->paginate(10)
        ]);
    }
}
