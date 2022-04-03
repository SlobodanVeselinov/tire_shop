<div>
    @if ($customer)

    <div class="border-t-2 border-gray-300 py-5">
        <h1 class="text-gray-900 text-lg font-bold">Details</h1>

        <div class="sm:grid grid-cols-3 gap-8 mt-5">
            {{-- LEFT SIDE DETAILS --}}
            <div>
                <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">Customer personal information</h1>

                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">Name:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->name }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">Date of Birth:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->date_of_birth }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">Adress:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->adress }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">City:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->city }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">Country:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->country }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">Email adress:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->email }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">Phone Number:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->phone }}</div>
                </div>
                <div class="w-full flex mb-3 border-b-2">
                    <div class="w-1/5 text-sm text-gray-800">Registered On:</div>
                    <div class="w-4/5 font-bold text-gray-800">{{ $customer->created_at->format('d-m-Y') }}</div>
                </div>
            </div>

            
            {{-- RIGHT  SIDE DETAILS --}}
            <div class="col-span-2">
                <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">Sales information</h1>
                <div class="overflow-y-auto">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                        <thead class="bg-gray-200 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Date
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Model
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Type
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Size
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Total Amount
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @forelse ($customer->sales as $sale)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $sale->created_at->format('d-m-Y') }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $sale->product->model }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $sale->product->type }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $sale->product->size }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">{{ $sale->total_price }}</td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        @if ($sale->is_paid) Paid @else Not Paid @endif
                                    </td>
                                    <td class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                        <a href="{{ route('sale.show', $sale->id) }}" class="text-gray-600 font-semibold text-sm bg-gray-200 px-3 py-2 border border-gray-300 rounded">Details</a>
                                    </td>
                                </tr>
                            @empty
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white" colspan="6">This customer has no sales registered.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
        
    @endif
</div>
