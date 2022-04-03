<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SalesByModel extends Component
{
    public function render()
    {

        $result = DB::table('products')
                ->join('sales', 'sales.product_id', '=', 'products.id')
                ->select('products.model as model', DB::raw('sum(sales.quantity) as total'))
                ->groupBy('products.model')
                ->orderBy('total', 'desc')
                ->limit(5)
                ->get();

        return view('livewire.sales-by-model', compact('result'));

    }
}
