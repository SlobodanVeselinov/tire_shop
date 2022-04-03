<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use RealRashid\SweetAlert\Facades\Alert;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sales.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.create-new');
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new Sale();

        $request->validate([
            'customer' => 'required',
            'quantity' => 'required',
            'is_paid' => 'required',
            //'payment_due' => 'required',
        ]);

        $customer = $request->input('customer');
        $product_id = $request->product;
        $product = Product::find($product_id);

        $sale->customer_id = $customer;
        $sale->product_id = $product_id;
        $sale->quantity = $request->quantity;
        $sale->is_paid = $request->is_paid;
        $sale->total_price = $product->sale_price * $sale->quantity;
        if($request->payment_due){
        $sale->payment_due = $request->payment_due;
        }
        $sale->save();

        Product::where('id',$product_id)->update(['quantity'=> $product->quantity - $sale->quantity]);

        Alert::toast('New sale added successfully', 'success');
        // session()->flash('sale-created', 'Sale was created successfully.');
        return redirect()->route('sale.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        return view('admin.sales.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }

    public function new_sale($id){
        $product = Product::find($id);
        $customers = Customer::paginate(5);
        return view('admin.sales.create', compact('product', 'customers'));
    }

    public function download_pdf($id){
        //return view('admin.pdf.invoice');

        $sale = Sale::find($id);

        $pdf = PDF::loadView('admin.pdf.invoice', [
            'sale' => $sale
        ]);
        return $pdf->download('invoice.pdf');
    }

        public function download_payment_receipt($id){
        //return view('admin.pdf.invoice');

        $payment = Payment::find($id);

        $pdf = PDF::loadView('admin.pdf.payment_receipt', [
            'payment' => $payment
        ]);
        return $pdf->download('payment-receipt.pdf');
    }


}
