<div 
@if($activeOrders>0)
class="rounded-full px-3 py-1 text-xs {{ (request()->is('admin/order*')) ? 'bg-gray-900 text-gray-200' : 'text-gray-900 bg-gray-200 ' }}"
@endif
>
    @if ($activeOrders>0)
        {{ $activeOrders }}
    @endif
</div>
