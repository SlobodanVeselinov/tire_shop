@extends('layouts.master')

@section('content')

    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            Payments Information
        </h1>
    </div>

    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">
            @livewire('payments-table')
        </div>
    </div>

@endsection