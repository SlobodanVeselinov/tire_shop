<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class ActiveOrdersCount extends Component
{

    protected $listeners = ['refreshOrderCounts' => 'render'];

    public function render()
    {
        $activeOrders = Order::where('is_processed', false)->count();
        return view('livewire.active-orders-count', compact('activeOrders'));
    }
}
