<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SalesByType extends Component
{
    public function render()
    {
        $result = DB::table('products')
                ->join('sales', 'sales.product_id', '=', 'products.id')
                ->select('products.type as type', DB::raw('sum(sales.quantity) as total'))
                ->groupBy('products.type')
                ->orderBy('total', 'desc')
                ->get();

        return view('livewire.sales-by-type', compact('result'));
    }
}
