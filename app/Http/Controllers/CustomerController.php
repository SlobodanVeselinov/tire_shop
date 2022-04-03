<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $this->validate($request, [
            'name'   =>'required',
            //'date_of_birth' => 'required',
            'adress' =>'required',
            'city' =>'required',
            'country' =>'required',
            //'email' =>'required|email',
            'phone' =>'required'
        ]);

        $customer->name = $request->name;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->adress = $request->adress;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->save();

        // Alert::success('Great', 'You have successfully registered new customer');
        Alert::toast('You have successfully registered new customer', 'success');
        // session()->flash('customer-created', 'Customer was added successfully.');


        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('admin.customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer = Customer::find($customer->id);
         $this->validate($request, [
            'name'   =>'required',
            //'date_of_birth' => 'required',
            'adress' =>'required',
            'city' =>'required',
            'country' =>'required',
            //'email' =>'required|email',
            'phone' =>'required'
        ]);

        $customer->name = $request->name;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->adress = $request->adress;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->save();

        Alert::toast('Customer information updated successfully', 'success');
        // session()->flash('customer-updated', 'Customer information updated successfully.');

        return redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }

}
