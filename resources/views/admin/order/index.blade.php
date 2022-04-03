@extends('layouts.master')

@section('content')

     <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            New Orders
        </h1>
    </div>

    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">
            @livewire('orders-page-table')
        </div>
    </div>

    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center mt-10">
        <h1>
            Completed Orders
        </h1>
    </div>

    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">
            @livewire('completed-orders')
        </div>
    </div>
    
@endsection