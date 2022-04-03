<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Carbon;

class OrdersPageTable extends Component
{

    public function changeOrderStatus($id){
        $order = Order::find($id);
        $order->update([
            'is_processed' => true,
            'process_date' => now()
        ]);
        
        // $order->is_processed = true;
        // $order->process_date = now();
        // $order->save();
        $this->emit('refreshOrderCounts');
        $this->render();
    }

    public function render()
    {
        $orders = Order::where('is_processed', false)->latest()->get();
        return view('livewire.orders-page-table', compact('orders'));
    }
}
