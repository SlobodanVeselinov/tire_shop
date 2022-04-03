@extends('layouts.master')

@section('content')
    
    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            Product Details
        </h1>
    </div>
    
    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">
            <div class="mb-5"><a href="{{ route('new_sale', $product->id) }}" class="text-white text-sm bg-green-700 px-3 py-2 rounded">Create Sale</a></div>
            @livewire('product-details', ['product' => $product])
        </div>
    </div>

@endsection