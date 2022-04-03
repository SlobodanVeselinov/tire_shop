<div>
    <div class="overflow-y-auto">
        <table class="min-w-full divide-y divide-gray-200 table-auto dark:divide-gray-700">
            <thead class="bg-gray-200 dark:bg-gray-700">
            <tr>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Order date</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Date of Process</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Customer Name</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Adress</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Phone</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Product Model</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Type</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Size</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Quantity</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Status</th>
                {{-- <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Actions</th> --}}

            </tr>
            </thead>
            @forelse ($orders as $order)
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->created_at->format('d M Y - H:i') }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->updated_at->format('d M Y - H:i') }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->customer_name }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->customer_adress }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->customer_phone }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->product->model }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->product->type }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->product->size }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $order->quantity }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    @if ($order->is_processed)
                        <span class="px-3 py-1 rounded-xl bg-green-500 text-green-100">Completed</span>
                    @endif
                </td>
                {{-- <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <button wire:click="changeOrderStatus({{ $order->id }})" class="text-gray-600 font-semibold text-sm bg-gray-200 px-3 py-2 border border-gray-300 rounded mr-2">Order completed</button>
                </td> --}}
            </tr>
            @empty
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white text-center" colspan="10">No completed orders</td>
            </tr>
            @endforelse
        </table>
    </div>
     <div class="py-5">
        {{ $orders->links() }}
    </div>
</div>
