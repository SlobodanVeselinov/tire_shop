<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Payment;
use Livewire\WithPagination;


class PaymentsTable extends Component
{
    use WithPagination;

    public $fromDate;
    public $toDate;
  
    public function render()
    {
        if($this->fromDate && !$this->toDate){
            $payments = Payment::whereDate('created_at', '>=', "$this->fromDate 00:00:00")->orderBy('created_at', 'desc')->paginate(10);
        }
        else if($this->toDate && !$this->fromDate) {
            $payments = Payment::whereDate('created_at', '<=', "$this->toDate 23:59:59")->orderBy('created_at', 'desc')->paginate(10);
        }
        else if($this->fromDate && $this->toDate){
            $payments = Payment::whereBetween('created_at', ["$this->fromDate 00:00:00", "$this->toDate 23:59:59"])->orderBy('created_at', 'desc')->orderBy('created_at', 'desc')->paginate(10);
        }
        else{
            $payments = Payment::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('livewire.payments-table', compact('payments'));
    }
}

