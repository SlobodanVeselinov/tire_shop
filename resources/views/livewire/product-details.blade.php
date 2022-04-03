<div>
    <div class="sm:grid grid-cols-3 gap-10">
        <div>
            <div class="flex justify-between bg-gray-600 p-3 mb-5 items-center">
                <h1 class="text-white">Basic Information</h1>
                <button onclick='Livewire.emit("openModal", "modals.update-product-basic-info", @json([$product]))' class="text-gray-200 text-sm underline">Update basic information</button>
            </div>
            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Model</div>
                <div class="w-2/4 font-bold text-gray-800">{{ $product->model }}</div>
            </div>
            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Type</div>
                <div class="w-2/4 font-bold text-gray-800">{{ $product->type }}</div>
            </div>
            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Size</div>
                <div class="w-2/4 font-bold text-gray-800">{{ $product->size }}</div>
            </div>
            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Year of Production</div>
                <div class="w-2/4 font-bold text-gray-800">{{ $product->year_of_production }}</div>
            </div>
        </div> 

        <div>
            <div class="flex justify-between bg-gray-600 p-3 mb-5 items-center">
                <h1 class="text-white">Pricing and stock</h1>
                <button onclick='Livewire.emit("openModal", "modals.update-product-pricing-info", @json([$product]))' class="text-gray-200 text-sm underline">Update pricing and stock</button>
            </div>

            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Purchase Price:</div>
                <div class="w-2/4 font-bold text-gray-800">{{ $product->purchase_price }}</div>
            </div>
            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Sale price:</div>
                <div class="w-2/4 font-bold text-gray-800">{{ $product->sale_price }}</div>
            </div>
            <div class="w-full flex mb-3 border-b-2 items-center">
                <div class="w-2/4 text-sm text-gray-800">Currently in stock:</div>
                <div class="w-2/4 flex justify-between items-center">
                    <div class="font-bold text-gray-800">{{ $product->quantity }}</div>
                    <button onclick='Livewire.emit("openModal", "modals.add-quantity", @json([$product]))' class="text-gray-900 text-sm underline pr-5">Add in stock</button>
                </div>

            </div>
        </div>

        <div>
            <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">General information</h1>

            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Date of purchase:</div>
                <div class="w-2/4 font-bold text-gray-800">{{ $product->created_at->format('d-m-Y') }}</div>
            </div>
            <div class="w-full flex mb-3 border-b-2">
                <div class="w-2/4 text-sm text-gray-800">Description:</div>
                <div class="w-2/4 text-gray-800">{{ $product->description }}</div>
            </div>
        </div>

    </div>
</div>
