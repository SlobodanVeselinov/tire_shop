<?php

namespace App\Http\Livewire\Modals;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use LivewireUI\Modal\ModalComponent;

class OrderModal extends ModalComponent
{

    public Product $product;
    public $customer_name;
    public $customer_adress;
    public $customer_email;
    public $customer_phone;
    public $quantity;


    public function mount(Product $product){
        $this->product = $product;
    }


        protected $rules = [
        'customer_name' => 'required',
        'customer_adress' => 'required',
        'customer_phone' => 'required',
        'quantity' => 'required',
    ];


    public function saveOrder(){
        $this->validate();


        $new_order = Order::create([

            'customer_name' => $this->customer_name,
            'product_id'    => $this->product->id,
            'customer_adress' => $this->customer_adress, 
            'customer_phone' => $this->customer_phone,
            'customer_email' => $this->customer_email,
            'quantity' => $this->quantity
            
        ]);

        Mail::send('admin.mail.order-mail', [
            'customer_name'     => $this->customer_name,
            'customer_adress'   => $this->customer_adress,
            'customer_phone'    => $this->customer_phone,
            'product_model'     => $this->product->model,
            'product_type'      => $this->product->type,
            'product_size'      => $this->product->size,
            'quantity'          => $this->quantity
        ], function ($message){
            $message->to('slobodan.veselinov@gmail.com', "New Order Received!!!")
            ->subject('New order received!!!');
        });

        $this->emit('closeModal');
        return redirect()->route('welcome')->with('message', 'Thank you for your order. We will contact you soon!');
    }

    public function render()
    {
        return view('livewire.modals.order-modal');
    }
}
