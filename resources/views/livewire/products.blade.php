<div>
    <div class="w-full bg-gray-200 py-5 px-5 sm:flex justify-between">
            <input type="text" wire:model="term" class="sm:w-1/4 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Product">
            <button class="sm:block w-full sm:w-44 text-gray-200 bg-gray-900 border border-gray-400 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:mt-0 mt-3" type="button" data-modal-toggle="addNewProduct">
                 Add New Product
            </button>
    </div>
    <div class="overflow-y-auto">
        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
            <thead class="bg-gray-200 dark:bg-gray-700">
                <tr>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Model</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Type</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Size</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Year</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Purchase Price</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Sale Price</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Quantity</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"></th>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->model }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->type }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->size }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->year_of_production }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->purchase_price }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->sale_price }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->quantity }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <a href="{{ route('new_sale', $product->id) }}" class="text-white text-sm bg-green-700 mr-2 px-3 py-2 rounded">Create Sale</a>
                    <a href="{{ route('product.show', $product) }}" class="text-gray-600 font-semibold text-sm bg-gray-200 px-3 py-2 border border-gray-300 rounded">Details</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
        <div class="py-5">
            {{ $products->links() }}
        </div>
</div>
