<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SalesBySize extends Component
{
    public function render()
    {
        $result = DB::table('products')
                ->join('sales', 'sales.product_id', '=', 'products.id')
                ->select('products.size as size', DB::raw('sum(sales.quantity) as total'))
                ->groupBy('products.size')
                ->orderBy('total', 'desc')
                ->limit(5)
                ->get();

        return view('livewire.sales-by-size', compact('result'));
    }
}
