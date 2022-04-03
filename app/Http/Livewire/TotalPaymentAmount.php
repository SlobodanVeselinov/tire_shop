<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Payment;
use App\Models\Sale;

class TotalPaymentAmount extends Component
{
    public $sale;

    protected $listeners = [
        'paymentRefresh' => 'render',
    ];

    public function updatePaymentStatus(){
        
        $this->sale->update(['is_paid' => 1]);
        $this->render();
        $this->emit('refreshPayments');

         $this->dispatchBrowserEvent('swal:saleClosed', [
                'type' => 'success',  
                'message' => 'Closed!', 
                'timer' => 3000
            ]);

    }


    public function render()
    {
        $totalPayments = Payment::where('sale_id', $this->sale->id)->sum('amount');
        $amount_to_be_paid = $this->sale->total_price - $totalPayments;
        
        return view('livewire.total-payment-amount', compact('totalPayments', 'amount_to_be_paid'));
    }
}
