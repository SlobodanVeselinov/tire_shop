@extends('layouts.master')

@section('content')
    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            All Products
        </h1>
    </div>
    
    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">

            @if (\Session::has('product-created'))

                <div class="flex w-full max-w-md overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="flex items-center justify-center w-12 bg-emerald-500">
                        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                        </svg>
                    </div>
                    
                    <div class="px-4 py-2 -mx-3">
                        <div class="mx-3">
                            <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
                            <p class="text-sm text-gray-600 dark:text-gray-200">{!! \Session::get('product-created') !!}</p>
                        </div>
                    </div>
                </div>
  
            @endif

            @livewire('products')
        </div>
    </div>

@include('admin.modals.new-product-modal')

@endsection

