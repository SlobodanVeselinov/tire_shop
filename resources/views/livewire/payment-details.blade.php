<div>
            <div class="w-full pt-8">
                <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">Payment details</h1>
            </div>

            @if (\Session::has('payment-created'))
                <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                        <span class="font-medium">Success alert!</span> {!! \Session::get('payment-created') !!}
                    </div>
                </div>
            @endif

            @if(!$sale->is_paid)
            <form wire:submit.prevent="storePayment">
                @csrf
                <div class="grid grid-cols-2 gap-5 mb-5">
                    <div>
                        <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Payment amount:</label>
                        <input type="number" wire:model="amount" name="amount" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        @error('amount')
                            <div class="text-red-700">* {{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Payment description:</label>
                        <input type="text" wire:model="description" name="descrition" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Insert payment</button>
            </form>
            @endif
            
            <div class="overflow-y-auto">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700 mt-5">
                    <thead class="bg-gray-200 dark:bg-gray-700">
                        <tr>
                            <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Payment Date</th>
                            <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Amount</th>
                            <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Description</th>
                            <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"></th>
                        </tr>
                    </thead>
                    @forelse ($payments as $payment) 
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->created_at->format('d-m-Y') }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->amount }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $payment->description }}</td>
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <a href="{{ route('download_payment_receipt', $payment->id) }}" class="flex items-center text-indigo-700">
                                <i class="fa-solid fa-download mr-2"></i> Download payment receipt
                                </a>
                                {{-- <a href="{{ route('download_payment_receipt', $payment->id) }}" class="bg-green-600 hover:bg-green-500 transition ease-in-out py-2 px-3 rounded text-sm text-white">
                                    Payment Receipt
                                </a> --}}
                            </td>
                        </tr>
                    @empty
                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                            <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">No payments are made for this sale.</td>
                        </tr>
                    @endforelse
                </table>
            </div>
            {{ $payments->links() }}
</div>
