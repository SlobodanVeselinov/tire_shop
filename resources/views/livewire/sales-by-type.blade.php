<div>
    <h1 class="text-white font-bold p-3 mb-5 bg-gray-600">Total sales by type</h1>
         @forelse ($result as $res)
            <div class="flex mb-3 border-b-2 px-5">
                <div class="w-2/5 text-sm text-gray-800">{{ $res->type }}</div>
                <div class="w-3/5 font-bold text-gray-800">{{ $res->total }}</div>
            </div>
        
        @empty
            No results found.
        @endforelse
</div>
