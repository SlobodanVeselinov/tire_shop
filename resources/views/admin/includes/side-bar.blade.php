<div class="sm:min-h-screen hidden sm:inline-block bg-gray-900 sm:fixed menu">    
    <div id="Main"  class="transform  xl:translate-x-0  ease-in-out transition duration-500 flex justify-start items-start h-full  w-full sm:w-64 bg-gray-900 flex-col">
        <div class="hidden xl:flex justify-start p-6 items-center space-x-3">
        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/sidebar2-svg1.svg" alt="logo" />
                <p class="text-2xl leading-6 text-white">Company Name</p>                
        </div>
        
        <div class="mt-6 flex flex-col justify-start items-center sm:h-screen w-full">
            <div class="flex  pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400 hover:bg-gray-200 hover:text-gray-900 transition ease-in-out text-gray-200 sm:mb-20">
                <i class="fa-solid fa-house-user w-1/6"></i>
                <p class="text-sm leading-4 w-5/6"><a href="{{ route('welcome') }}">HOME</a></p>                    
            </div>

            <div class="flex  pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400 hover:bg-gray-200 hover:text-gray-900 transition ease-in-out {{ (request()->is('admin/dashboard*')) ? 'bg-gray-200 text-gray-900' : 'text-gray-200' }}">
                <i class="fa-solid fa-chart-line w-1/5"></i>
                <p class="text-sm leading-4 w-5/6"><a href="{{ route('dashboard') }}">Dashboard</a></p>                    
            </div>
            
            <div class="flex pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400  hover:bg-gray-200 hover:text-gray-900 transition ease-in-out {{ (request()->is('admin/product*')) ? 'bg-gray-200 text-gray-900' : 'text-gray-200' }}">
                <i class="fa-brands fa-product-hunt w-1/6"></i>
                <p class="text-sm leading-4 w-5/6"><a href="{{ route('product.index') }}">Products</a></p>                    
            </div>

            <div class="flex pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400  hover:bg-gray-200 hover:text-gray-900 transition ease-in-out {{ (request()->is('admin/customer*')) ? 'bg-gray-200 text-gray-900' : 'text-gray-200  ' }}">
                <i class="fa-solid fa-handshake w-1/6"></i>
                <p class="text-sm leading-4 w-5/6"><a href="{{ route('customer.index') }}">Customers</a></p>  
            </div>

            <div class="flex pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400 hover:bg-gray-200 hover:text-gray-900 transition ease-in-out  {{ (request()->is('admin/sale*')) ? 'bg-gray-200 text-gray-900' : 'text-gray-200' }}">
                <i class="fa-solid fa-file-contract w-1/6"></i>
                <p class="text-sm leading-4 w-5/6"><a href="{{ route('sale.index') }}">Sales</a></p>                    
            </div>

            <div class="flex pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400  hover:bg-gray-200 hover:text-gray-900 transition ease-in-out {{ (request()->is('admin/payment*')) ? 'bg-gray-200 text-gray-900' : 'text-gray-200  ' }}">
                <i class="fa-solid fa-coins w-1/6"></i>
                <p class="text-sm leading-4 w-5/6"><a href="{{ route('payment.index') }}">Payments</a></p>                    
            </div>

            <div class="flex pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400  hover:bg-gray-200 hover:text-gray-900 transition ease-in-out {{ (request()->is('admin/order*')) ? 'bg-gray-200 text-gray-900' : 'text-gray-200  ' }}">
                <i class="fa-solid fa-cart-arrow-down w-1/6"></i>
                <p class="text-sm leading-4 w-3/6"><a href="{{ route('order.index') }}">Orders @livewire('active-orders-count')</a></p>                    
            </div>

            <div class="flex border-t border-gray-500 pl-4 items-center space-x-4 py-4 w-full  focus:outline-none  focus:text-indigo-400  text-gray-200  hover:bg-gray-200 hover:text-gray-900 transition ease-in-out sm:mt-32">
                <i class="fa-solid fa-right-from-bracket w-1/6"></i>
                <p class="text-sm leading-4 w-5/6"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </p>    
            </div>
        </div>
        
    </div>
</div>