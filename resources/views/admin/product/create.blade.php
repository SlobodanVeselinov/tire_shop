@extends('layouts.master')

@section('content')

    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            Add New Product
        </h1>
    </div>

    <div class="bg-white pb-5">

        <form method="post" action="{{ route('product.store') }}">
            @csrf
            <div class="mx-5 pt-10 grid grid-cols-3 gap-5">
                <div>
                <label for="model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Model:</label>
                <select id="model" name="model" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    @foreach ($models as $model)
                        <option value="{{ $model->name }}" >{{ $model->name }}</option>
                    @endforeach
                </select>
                </div>

                <div>
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Type:</label>
                <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    @foreach ($types as $type)
                        <option value="{{ $type->name }}">{{ $type->name }}</option>
                    @endforeach
                </select>
                </div>

                <div>
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Select Size:</label>
                <select id="type" name="size" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                    @foreach ($sizes as $size)
                        <option value="{{ $size->value }}">{{ $size->value }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <div class="mx-5 pt-10">
                <label for="year_of_production" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Year of production: </label>
                <input type="number" name="year_of_production" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                @error('year_of_production')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
            </div>

            <div class="mx-5 pt-10">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description: </label>
                <textarea name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 h-28" placeholder=""></textarea>
                @error('description')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
            </div>

            <div class="mx-5 pt-10">
                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Quantity: </label>
                <input type="number" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                @error('quantity')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
            </div>

            <div class="mx-5 pt-10 grid grid-cols-2 gap-5">
                <div>
                <label for="purchase_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Purchase Price: </label>
                <input type="number" name="purchase_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                @error('purchase_price')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
                </div>

                <div>
                <label for="sale_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sale Price: </label>
                <input type="number" name="sale_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                @error('sale_price')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
                </div>
            </div>

            <div class="mx-5 pt-10">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Product</button>
            </div>

        </form>
    </div>




@endsection