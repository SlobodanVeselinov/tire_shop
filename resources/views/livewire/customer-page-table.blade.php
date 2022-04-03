<div>
    <div class="w-full py-5 px-5 bg-gray-200 sm:flex justify-between">
        <input type="text" wire:model="term" class="sm:w-1/4 w-full  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for customer">
        <button class="block w-full sm:w-44 sm:mt-0 mt-3 text-gray-200 bg-gray-900 border border-gray-400 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button" data-modal-toggle="newCustomerModal">
  Add New Customer
</button>

    </div>
    <div class="overflow-y-auto">
        <table class="min-w-full divide-y divide-gray-200 table-auto dark:divide-gray-700">
            <thead class="bg-gray-200 dark:bg-gray-700">
            <tr>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Customer Name</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Adress</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">City</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Phone Number</th>
                <th scope="col" class="py-3 px-6 text-xs font-bold tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">Options</th>
            </tr>
            </thead>
            @forelse ($customers as $customer)
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->name }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->adress }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->city }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $customer->phone }}</td>
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <button wire:click="$emit('customerDetails', {{ $customer->id }})" class="text-gray-600 font-semibold text-sm bg-gray-200 px-3 py-2 border border-gray-300 rounded mr-2">Details</button>
                    <button onclick='Livewire.emit("openModal", "modals.update-customer", @json([$customer]))' class="text-white text-sm bg-green-700 px-3 py-2 rounded border border-green-700">Update User</button>
                    <button class="text-red-700 border border-red-700 text-sm px-3 py-2 rounded" wire:click="confirmDeleteCustomer({{ $customer->id }})">Delete</button>
                </td>
            </tr>
            @empty
            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 border-b">
                <td class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    No customer like "{{ $term }}" is registered. 
                </td>
            </tr>
            @endforelse
        </table>
    </div>
    <div class="py-5">
        {{ $customers->links() }}
    </div>
</div>

