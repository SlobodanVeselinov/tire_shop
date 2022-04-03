<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\Validator;

class SaleCustomerTable extends Component
{

    public $customers_search = null;
    public $products_search = null;
    public $data = [];

    public function updatingTerm()
    {
        $this->resetPage();
    }

    public function createSale(){
        Validator::make($this->data, [
            'product_id' => 'required',
            'customer_id' => 'required',
            'quantity' => 'required',
            'is_paid' => 'required',
            'payment_due' => 'required'
        ])->validate();

        $product = Product::find($this->data['product_id']);

        $sale = new Sale();
        $sale->customer_id = $this->data['customer_id'];
        $sale->product_id = $this->data['product_id'];
        $sale->quantity = $this->data['quantity'];
        $sale->is_paid = $this->data['is_paid'];
        $sale->total_price = $product->sale_price * $sale->quantity; 
        $sale->payment_due = $this->data['payment_due'];
        $sale->save();
        $this->updateStockQuantity();

        $this->dispatchBrowserEvent('swal:payment', [
                'type' => 'success',  
                'message' => 'Saved!', 
                'timer' => 3000
            ]);
        session()->flash('sale-created', 'Sale was created successfully.');
        return redirect()->to('/admin/sale');
    }

    public function updateStockQuantity(){
        $product = Product::find($this->data['product_id']);
        $product->quantity = $product->quantity - $this->data['quantity'];
        $product->save();
    }

    public function render()
    {
        $customers = Customer::where('name', 'LIKE', "%$this->customers_search%")->get();
        $products = Product::where('model', 'LIKE', "%$this->products_search%")
                             ->orWhere('size', 'LIKE', "%$this->products_search%")
                             ->orWhere('type', 'LIKE', "%$this->products_search%")->get();
        return view('livewire.sale-customer-table', ['customers' => $customers, 'products' => $products]);
    }
}
