@extends('layouts.master')

@section('content')

    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            Sale Details
        </h1>
    </div>
    
    <div class="bg-white py-5">
        <div class="mx-5">

            <a href="{{ route('download_pdf', $sale->id) }}" class="bg-green-600 hover:bg-green-500 transition ease-in-out py-2 px-3 rounded text-sm text-white">
                <i class="fa-solid fa-download mr-2"></i> Download Invoice
            </a>

            <div class="sm:grid grid-cols-3 gap-5 mt-5">
            {{-- LEFT SIDE DETAILS --}}
            <div>
                <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">Customer personal information</h1>

                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Name:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->name }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Date of Birth:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->date_of_birth }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Adress:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->adress }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">City:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->city }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Country:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->country }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Email adress:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->email }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Phone Number:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->phone }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Registered On:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->customer->created_at->format('d-m-Y') }}</div>
                </div>
            </div>

            
            {{-- MIDDLE DETAILS --}}
            <div>
                <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">Product information</h1>
                
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Model:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->product->model }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Type:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->product->type }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Size:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->product->size }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Year of Production:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->product->year_of_production }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Left in storage:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->product->quantity }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Purchase Price:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->product->purchase_price }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Sale Price:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->product->sale_price }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Product Description:</div>
                    <div class="w-3/5 text-gray-800 font-normal text-sm">{{ $sale->product->description }}</div>
                </div>
            </div>

            {{-- RIGHT SIDE DETAILS --}}
            <div>
                <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">Sale information</h1>
                
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Date of Purchase:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->created_at }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Quantity:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->quantity }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Total Price:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->total_price }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-2/5 text-sm text-gray-800">Payment Due:</div>
                    <div class="w-3/5 font-bold text-gray-800">{{ $sale->payment_due }}</div>
                </div>
                
                @livewire('total-payment-amount', ['sale' => $sale])
            </div>
        </div>
    </div>


    {{-- PAYMENT DETAILS --}}
    <div class="bg-white py-5">
        <div class="mx-5">

            @livewire('payment-details', ['sale' => $sale])

        </div>
    </div>

@endsection