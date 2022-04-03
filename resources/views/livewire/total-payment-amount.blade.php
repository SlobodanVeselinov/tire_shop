<div>
    <div class="w-full flex mb-3 border-b-2">
        <div class="w-2/5 text-sm text-gray-800">Is the product paid:</div>
        <div class="w-3/5 font-bold text-gray-800">
            @if ($sale->is_paid)
                Yes
            @else
                No                
            @endif
            {{-- @if ($amount_to_be_paid <= 0)
                Yes
            @else
                No
            @endif --}}
        </div>
    </div>
    <div class="w-full flex mb-3 border-b-2">
        <div class="w-2/5 text-sm text-gray-800">Total payments amount:</div>
        <div class="w-3/5 font-bold text-gray-800">
            @if ($sale->is_paid)
                {{ $sale->total_price }}
            @else
                {{ $totalPayments }}
            @endif
        </div>
    </div>
    <div class="w-full flex mb-3 border-b-2">
        <div class="w-2/5 text-sm text-gray-800">Amount to be paid:</div>
        <div class="w-3/5 font-bold text-gray-800">
            @if ($sale->is_paid)
                0
            @else
                {{ $amount_to_be_paid }}
            @endif
        </div>
    </div>
    @if(!$sale->is_paid && $amount_to_be_paid <=0)
    <div class="w-full flex mb-3">
        <button wire:click="updatePaymentStatus" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close Sale</button>
    </div>
    @endif

</div>
