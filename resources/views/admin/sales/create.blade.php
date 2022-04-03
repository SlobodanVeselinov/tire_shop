@extends('layouts.master')

@section('content')

    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            Create new sale
        </h1>
    </div>

    <div class="bg-white pb-5 overflow-x-auto">
        <div class="mx-5">
            <p class="pt-5 text-lg font-bold text-gray-900">Product Information</p>
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
        <thead class="bg-gray-200 dark:bg-gray-700">
        <tr>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Model</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Type</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Size</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Year</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Sale Price</th>
        </tr>
                </thead>
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->model }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->type }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->size }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->year_of_production }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->sale_price }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="bg-white pb-5">
        <div class="mx-5">
            <form method="post" action="{{ route('sale.store') }}">
                @csrf
                <input type="hidden" name="product" value="{{ $product->id}}">
                    <p class="pt-10">
                        From the customers table below, select the customer. Then insert the quantity of the given product, payment due and choose if the product is paid or not and click <span class="font-bold">Create Sale</span>. </p>
                    @livewire('customers')
                        @error('customer')
                            <div class="text-red-700">* {{ $message }}</div>
                        @enderror
                    <div class="mx-5 my-10">
                        <label for="quantity">Quantity: </label>
                        <input type="number" name="quantity" class="ml-auto w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    @error('quantity')
                        <div class="text-red-700">* {{ $message }}</div>
                    @enderror
                    <div class="mx-5 my-10">
                        <label for="payment_due">Payment Due: </label>
                        <input type="date" name="payment_due" class="ml-auto w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    @error('payment_due')
                            <div class="text-red-700">* {{ $message }}</div>
                        @enderror
                    <div class="mx-5 my-10">
                        <label for="is_paid">Is the product paid: </label>
                        <select name="is_paid" class="ml-auto w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected="true">------Select Option------</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    @error('is_paid')
                            <div class="text-red-700">* {{ $message }}</div>
                        @enderror
                <button type="submit" class="py-2 px-3 bg-blue-700 rounded hover:bg-blue-400 transition ease-in-out text-white text-sm mt-6 ml-5">Create Sale</button>
            </form>
        </div>
    </div>
    

  

@endsection