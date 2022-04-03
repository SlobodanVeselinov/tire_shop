<div>

    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            Create new sale
        </h1>
    </div>
        <form wire:submit.prevent="createSale">
        @csrf
     <div class="bg-white pb-5">
        <div class="mx-5">
            <div class="w-full text-right mb-5 pt-10">
                <input type="text" wire:model="customers_search" class="sm:w-1/5  w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for customer">
            </div>
            <div class="overflow-y-auto">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-200 dark:bg-gray-700">
                        <tr>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"></th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Customer Name</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Adress</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">City</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Country</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Email Address</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Phone Number</th>
                        </tr>
                    </thead>
                    @if($customers_search != null)
                        @forelse ($customers as $customer)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="radio" wire:model="data.customer_id" value="{{ $customer->id}}">
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->name }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->adress }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->city }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->country }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->email }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->phone }}</td>
                            </tr>
                        @empty
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td colspan="6" class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">No records found</td>
                            </tr>
                        @endforelse
                    @endif
                </table>
            </div>
            @error('customer_id')
                <div class="text-red-700">* {{ $message }}</div>
            @enderror
            
            <div class="py-5">
            </div>

            <div class="w-full text-right mb-5 pt-10">
                    <input type="text" wire:model="products_search" class="sm:w-1/5 w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for Product">
            </div>
            <div class="overflow-y-auto">
                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                    <thead class="bg-gray-200 dark:bg-gray-700">
                        <tr>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400"></th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Model</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Type</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Size</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Year</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Purchase Price</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Sale Price</th>
                        <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Quantity</th>
                        </tr>
                    </thead>
                    @if($products_search != null)
                        @forelse ($products as $product)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <input type="radio" wire:model="data.product_id" value="{{ $product->id}}">
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->model }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->type }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->size }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->year_of_production }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->purchase_price }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->sale_price }}</td>
                                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $product->quantity }}</td>
                            </tr>
                        @empty
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td colspan="6" class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">No records found</td>
                            </tr>
                        @endforelse
                    @endif
                </table>
            </div>
            @error('product_id')
                <div class="text-red-700">* {{ $message }}</div>
            @enderror
                <div class="py-5">
                </div>    

                    <div class="mx-5 my-10">
                        <label for="quantity">Quantity: </label>
                        <input type="number" wire:model.defer="data.quantity" class="ml-auto w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    @error('quantity')
                            <div class="text-red-700">* {{ $message }}</div>
                    @enderror
                    <div class="mx-5 my-10">
                        <label for="payment_due">Payment Due: </label>
                        <input type="date" wire:model.defer="data.payment_due" class="ml-auto w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    @error('payment_due')
                            <div class="text-red-700">* {{ $message }}</div>
                    @enderror
                    <div class="mx-5 my-10">
                        <label for="is_paid">Is the product paid: </label>
                        <select wire:model.defer="data.is_paid" class="ml-auto w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
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


</div>
