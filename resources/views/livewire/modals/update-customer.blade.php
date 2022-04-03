<div>
    <div class="px-8 py-4 bg-gray-900">
            <h2 class="text-lg text-gray-200 font-semibold">Update user information</h2>
        </div>
        <form wire:submit.prevent="updateCustomer">
            <div class="p-8 border-b-2 border-gray-200">
                <label
                for="name"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Name
                </label>
                <input
                wire:model.defer="customer.name"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('customer.name')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="date_of_birth"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Date of birth
                </label>
                <input
                wire:model.defer="customer.date_of_birth"
                type="date" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('customer.date_of_birth')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="adress"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Adress
                </label>
                <input
                wire:model.defer="customer.adress"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('customer.adress')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="city"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                City
                </label>
                <input
                wire:model.defer="customer.city"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('customer.city')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="country"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Country
                </label>
                <input
                wire:model.defer="customer.country"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('customer.country')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="email"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Email adress
                </label>
                <input
                wire:model.defer="customer.email"
                type="email" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('customer.email')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="phone"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Phone Number</label>
                </label>
                <input
                wire:model.defer="customer.phone"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('customer.phone')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

            </div>
            <div class="px-8 py-3 flex">
                <button type="submit" class="block text-gray-200 bg-gray-900 border border-gray-400 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" >
                    Update
                </button>
        </form>
                <button wire:click.prevent="$emit('closeModal')" class="text-gray-900 ml-5 text-sm">Cancel</button>
            </div>
        
</div>
