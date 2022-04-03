@extends('layouts.master')

@section('content')
       
    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            All Customers
        </h1>
    </div>

    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">

            {{-- @if (\Session::has('customer-created'))
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Success alert!</span> {!! \Session::get('customer-created') !!}
                    </div>
                </div>
            @endif

            @if (\Session::has('customer-updated'))
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Success alert!</span> {!! \Session::get('customer-updated') !!}
                    </div>
                </div>
            @endif --}}

            @livewire('customer-page-table')
        </div>
    </div>

    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">
            @livewire('customer-info')
        </div>
    </div>

    @include('admin.modals.new-customer-modal')

@endsection