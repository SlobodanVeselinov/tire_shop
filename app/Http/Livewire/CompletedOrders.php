<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;


class CompletedOrders extends Component
{
    use WithPagination;

    protected $listeners = ['refreshOrderCounts' => 'render'];

    public function render()
    {
        $orders = Order::where('is_processed', true)->latest()->paginate(5);
        return view('livewire.completed-orders', compact('orders'));
    }
}
