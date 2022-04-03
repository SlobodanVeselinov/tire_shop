<div>
        <div class="p-5 bg-gray-900 sm:mt-16 h-32 mx-auto flex justify-center items-center">
            <input type="text" wire:model="search" class="sm:w-2/4 w-full  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-orange-600 focus:border-orange-600 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for product by name, size od type">
        </div>

        @if(session()->has('message'))
            <div class="w-full mx-auto p-3 bg-green-500 text-green-200 text-sm">
                <div class="w-5/6 mx-auto text-center">
                {{ session()->get('message') }}
                </div>
            </div>
        @endif

        <div class="sm:w-4/5 w-5/6 mx-auto grid lg:grid-cols-4 sm:grid-cols-2 gap-5 mt-10 text-sm">

            @forelse ($products as $product)
                <div class="border border-orange-600 rounded-lg shadow-lg">
                    <div class="flex justify-center mb-3">
                        <div class="font-bold bg-gray-900 text-gray-200 w-full text-center p-5 rounded-t-lg">{{ Str::upper($product->model) }}</div>
                    </div>
                    <div class="p-3">
                        <div class="grid grid-cols-2 mb-2">
                            <div>Size:</div>
                            <div>{{ $product->size }}</div>
                        </div>
                        <div class="grid grid-cols-2 mb-2">
                            <div>Type:</div>
                            <div>{{ $product->type }}</div>
                        </div>
                        <div class="grid grid-cols-2 mb-2">
                            <div>Price:</div>
                            <div>{{ $product->sale_price }}</div>
                        </div>
                        <div class="grid grid-cols-2 mb-2">
                            <div>Year:</div>
                            <div>{{ $product->year_of_production }}</div>
                        </div>
                        <div class="grid grid-cols-2 mb-2">
                            <div>In stock:</div>
                            <div>
                                @if ($product->quantity > 0)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                @endif
                            </div>
                        </div>
                        <div class="flex justify-center mt-5">
                            <button 
                            wire:click='$emit("openModal", "modals.order-modal", @json([$product]))'
                            class="px-5 py-3 bg-orange-600 text-white font-semibold text-sm rounded-lg">Order now</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="w-full mx-auto p-10 flex justify-center items-center text-lg">No results for <span class="text-red-600">"{{ $search }}"</span></div>
            @endforelse
        </div>
        <div class="py-5 w-4/5 mx-auto">
            {{ $products->links() }}
        </div>
</div>
