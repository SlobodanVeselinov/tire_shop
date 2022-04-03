<div>
    <div class="w-full py-5 px-5 bg-gray-200 sm:flex justify-between">
        <div>
        <label for="search">Choose an option for filtering: </label>
        <select wire:model="term" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2">
            <option class="" value="2">All Sales</option>
            <option value="1">Fully paid</option>
            <option value="0">Not paid</option>
        </select>
        </div>
        <div>
        <a href="{{ route('sale.create') }}"
            class="mt-3 sm:mt-0 block w-full sm:w-44 text-gray-200 bg-gray-900 border border-gray-400 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
            Add New Sale
        </a>
        </div>

    </div>

    <div class="overflow-y-auto">
        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
            <thead class="bg-gray-200 dark:bg-gray-700">
            <tr>
                        {{-- <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Ref.No</th> --}}
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Purchase Date</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Client Name</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Product Model</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Product Type</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Product Size</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Quantity</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Single Price</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Total</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Sale Status</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Actions</th>
            </tr>
                    </thead>
                        @forelse ($sales as $sale)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                                {{-- <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->id }}</td> --}}
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->created_at->format('d M Y') }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->customer->name }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->product->model }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->product->type }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->product->size }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->quantity }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->product->sale_price }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->product->sale_price * $sale->quantity }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    @if ($sale->is_paid)
                                        <span class="text-green-600">Paid</span>
                                    @else
                                        <span class="text-red-600">Not Paid</span>
                                    @endif
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white"><a href="{{ route('sale.show', $sale)}}" class="text-gray-600 font-semibold text-sm bg-gray-200 px-3 py-2 border border-gray-300 rounded">Show Details</a></td>
                            </tr>
                        @empty
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td colspan="10" class="py-4 px-6 text-sm text-gray-900 whitespace-nowrap dark:text-white text-center font-bold">
                                No sales in database.
                            </td>
                        </tr>
                        @endforelse
        </table>
    </div>
                    <div class="py-5">
                        {{ $sales->links() }}
                    </div>
            
</div>
