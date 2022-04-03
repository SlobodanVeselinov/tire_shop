    <div id="addNewProduct" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed right-0 left-0 top-4 z-50 justify-center items-center h-modal md:h-full md:inset-0">
    <div class="relative px-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-5 rounded-t border-b bg-gray-900">
                <h3 class="text-xl font-semibold text-gray-200 lg:text-2xl dark:text-white">
                    Add new product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="addNewProduct">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                </button>
            </div>
            <!-- Modal body -->
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
                <input type="number" name="year_of_production" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
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
                <input type="number" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                @error('quantity')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
            </div>

            <div class="mx-5 pt-10 grid grid-cols-2 gap-5">
                <div>
                <label for="purchase_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Purchase Price: </label>
                <input type="number" name="purchase_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                @error('purchase_price')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
                </div>

                <div>
                <label for="sale_price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sale Price: </label>
                <input type="number" name="sale_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                @error('sale_price')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror
                </div>
            </div>

            <div class="mx-5 pt-10">
                <button type="submit" class="block text-gray-200 bg-gray-900 border border-gray-400 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Product</button>
            </div>

        </form>
    </div>
        </div>
    </div>
</div>
