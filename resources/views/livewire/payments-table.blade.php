<div>
    
    <div class="w-full py-5 px-5 sm:flex bg-gray-200 sm:space-x-5 space-y-5 sm:space-y-0">
        <div class="text-gray-900 sm:w-1/5 w-full">
            <label for="" class="text-sm">From:</label>
            <input type="date" wire:model="fromDate" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="text-gray-900 sm:w-1/5 w-full">
            <label for="" class="text-sm">To:</label>
            <input type="date" wire:model="toDate" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
    </div>

    <div class="overflow-y-auto">
        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
            <thead class="bg-gray-200 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Payment Date</th>
                    {{-- <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Sale Reference Number</th> --}}
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Date of purchase</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Payment amount</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Customer Name</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Product Model</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Product Type</th>
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Product size</th>
                    {{-- <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Payment description</th> --}}
                    <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"></th>
                </tr>
            </thead>
            @forelse ($payments as $payment)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->created_at->format('d-m-Y') }}</td>
                    {{-- <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->sale_id }}</td> --}}
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->sale->created_at->format('d-m-Y') }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->amount }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->sale->customer->name }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->sale->product->model }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->sale->product->type }}</td>
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->sale->product->size }}</td>
                    {{-- <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        @if($payment->description) {{ $payment->description }} @else No description available for this payment. @endif
                    </td> --}}
                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="{{ route('sale.show', $payment->sale_id) }}" class="text-gray-500 bg-gray-200 border border-gray-300 px-3 py-2 rounded text-sm hover:bg-gray-300 transition ease-in-out mr-2">
                            View Details
                        </a>
                        <a href="{{ route('download_payment_receipt', $payment->id) }}" class="bg-green-600 border border-green-600 hover:bg-green-500 transition ease-in-out py-2 px-3 rounded text-sm text-white">
                            Payment Receipt
                        </a>
                    </td>
                </tr>
            @empty
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                    <td colspan="10" class="text-center py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">No payments were found between {{ $fromDate }} and {{ $toDate }}</td>
                </tr>
            @endforelse
        </table>
    </div>
    <div class="py-5">
        {{ $payments->links() }}
    </div>
    
</div>
