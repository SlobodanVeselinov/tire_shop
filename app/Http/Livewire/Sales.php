<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sale;
use Livewire\WithPagination;

class Sales extends Component
{
    use WithPagination;
    
    public $term = 2;
    
    public function updatingTerm()
    {
        $this->resetPage();
    }

    public function render()
    {
        if($this->term == 2) {
            $sales = Sale::latest()->paginate(10);
        }
        else {
            $sales = Sale::where('is_paid', $this->term)->orderBy('created_at', 'desc')->paginate(10);
         }
        return view('livewire.sales', compact('sales'));
    }
}
