<div>
        <div class="px-8 py-4 bg-gray-900">
            <h2 class="text-lg text-gray-200 font-semibold">Update pricing and stock</h2>
        </div>
        <form wire:submit.prevent="updateProduct">
            <div class="p-8 border-b-2 border-gray-200">
                <label
                for="purchase_price"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Purchase Price
                </label>
                <input
                wire:model.defer="product.purchase_price"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('product.purchase_price')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="type"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Sale price
                </label>
                <input
                wire:model.defer="product.sale_price"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('product.sale_price')
                    <div class="text-red-700">* {{ $message }}</div>
                @enderror

                <label
                for="size"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                Quantity
                </label>
                <input
                wire:model.defer="product.quantity"
                type="text" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-3" 
                >
                @error('product.quantity')
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
