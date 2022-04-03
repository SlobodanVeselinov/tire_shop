<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sale;
use App\Models\Payment;
use Illuminate\Support\Facades\Validator;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;



class PaymentDetails extends Component
{

    use WithPagination;

    public $sale;
    public $amount;
    public $description;

    protected $rules = [
        'amount' => 'required'
    ];

    protected $listeners = [
        'refreshPayments' => 'render'
    ];


    public function storePayment(){
        
        $this->validate();
        
        $payment = new Payment();
        $payment->sale_id = $this->sale->id;
        $payment->amount = $this->amount;
        $payment->description = $this->description;
        $payment->save();
        
        $this->render();
        $this->amount = null;
        $this->description = null;
        $this->emit('paymentRefresh');

        $this->dispatchBrowserEvent('swal:payment', [
                'type' => 'success',  
                'message' => 'Payment added!', 
                'timer' => 3000
            ]);

    }

    public function render()
    {
        $payments = Payment::where('sale_id', $this->sale->id)->orderBy('id', 'desc')->paginate(5);
        return view('livewire.payment-details', compact('payments'));
    }
}
