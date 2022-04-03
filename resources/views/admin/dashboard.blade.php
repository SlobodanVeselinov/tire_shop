@extends('layouts.master')

@section('content')

    <div class="w-full bg-gray-900 text-white p-5 flex justify-between items-center">
        <h1>
            Dashboard Panel
        </h1>
        
    </div>

    <div class="bg-white pb-5">
        <div class="mx-5 pt-5">
        
            <div class="md:grid md:grid-cols-4 gap-7 space-y-5 sm:space-y-0">
                <div>
                    <!--  Monthly card start  -->
                    <div class="pl-1 w-full h-28 bg-green-400 rounded-lg shadow-md">
                        <a href="{{ route('customer.index') }}">
                            <div class="flex w-full h-full py-2 px-4 bg-gray-200 hover:bg-gray-300 transition-all ease-in-out text-gray-700 rounded-lg justify-between">
                                <div class="my-auto">
                                    <p class="font-bold">CUSTOMERS</p>
                                    <p class="text-lg">{{ $customers }}</p>
                                </div>
                                <div class="my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                                    </svg>                 
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--  Monthly card end  -->    
                </div>


                <div>
                    <!--  Monthly card start  -->
                    <div class="pl-1 w-full h-28 bg-blue-500 rounded-lg shadow-md">
                        <a href="{{ route('product.index') }}">
                            <div class="flex w-full h-full py-2 px-4 bg-gray-200 hover:bg-gray-300 transition-all ease-in-out text-gray-700 rounded-lg justify-between">
                                <div class="my-auto">
                                    <p class="font-bold">PRODUCTS</p>
                                    <p class="text-lg">{{ $products }}</p>
                                </div>
                                <div class="my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-blue-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a2 2 0 00-2 2v11a3 3 0 106 0V4a2 2 0 00-2-2H4zm1 14a1 1 0 100-2 1 1 0 000 2zm5-1.757l4.9-4.9a2 2 0 000-2.828L13.485 5.1a2 2 0 00-2.828 0L10 5.757v8.486zM16 18H9.071l6-6H16a2 2 0 012 2v2a2 2 0 01-2 2z" clip-rule="evenodd" />
                                    </svg>                 
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--  Monthly card end  -->   
                </div>


                <div>
                    <!--  Monthly card start  -->
                    <div class="pl-1 w-full h-28 bg-purple-500 rounded-lg shadow-md">
                        <a href="{{ route('sale.index') }}">
                            <div class="flex w-full h-full py-2 px-4 bg-gray-200 hover:bg-gray-300 transition-all ease-in-out text-gray-700 rounded-lg justify-between">
                                <div class="my-auto">
                                    <p class="font-bold">SALES</p>
                                    <p class="text-lg">{{ $sales }}</p>
                                </div>
                                <div class="my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.736 6.979C9.208 6.193 9.696 6 10 6c.304 0 .792.193 1.264.979a1 1 0 001.715-1.029C12.279 4.784 11.232 4 10 4s-2.279.784-2.979 1.95c-.285.475-.507 1-.67 1.55H6a1 1 0 000 2h.013a9.358 9.358 0 000 1H6a1 1 0 100 2h.351c.163.55.385 1.075.67 1.55C7.721 15.216 8.768 16 10 16s2.279-.784 2.979-1.95a1 1 0 10-1.715-1.029c-.472.786-.96.979-1.264.979-.304 0-.792-.193-1.264-.979a4.265 4.265 0 01-.264-.521H10a1 1 0 100-2H8.017a7.36 7.36 0 010-1H10a1 1 0 100-2H8.472c.08-.185.167-.36.264-.521z" clip-rule="evenodd" />
                                    </svg>                
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--  Monthly card end  -->   
                </div>


                <div>
                    <!--  Monthly card start  -->
                    <div class="pl-1 w-full h-28 bg-yellow-400 rounded-lg shadow-md">
                        <a href="{{ route('sale.index') }}">
                            <div class="flex w-full h-full py-2 px-4 bg-gray-200 hover:bg-gray-300 transition-all ease-in-out text-gray-700 rounded-lg justify-between">
                                <div class="my-auto">
                                    <p class="font-bold">CLOSED SALES</p>
                                    <p class="text-lg">{{ $finished_sales }}</p>
                                </div>
                                <div class="my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>                
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--  Monthly card end  -->   
                </div>

                <div>
                    <!--  Monthly card start  -->
                    <div class="pl-1 w-full h-28 bg-indigo-700 rounded-lg shadow-md">
                        <a href="{{ route('order.index') }}">
                            <div class="flex w-full h-full py-2 px-4 bg-gray-200 hover:bg-gray-300 transition-all ease-in-out text-gray-700 rounded-lg justify-between">
                                <div class="my-auto">
                                    <p class="font-bold">PENDING ONLINE ORDERS</p>
                                    <p class="text-lg">{{ $pendingOrders }}</p>
                                </div>
                                <div class="my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>               
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--  Monthly card end  -->   
                </div>

                <div>
                    <!--  Monthly card start  -->
                    <div class="pl-1 w-full h-28 bg-gray-700 rounded-lg shadow-md">
                        <a href="{{ route('order.index') }}">
                            <div class="flex w-full h-full py-2 px-4 bg-gray-200 hover:bg-gray-300 transition-all ease-in-out text-gray-700 rounded-lg justify-between">
                                <div class="my-auto">
                                    <p class="font-bold">COMPLETED ONLINE ORDERS</p>
                                    <p class="text-lg">{{ $completedOrders }}</p>
                                </div>
                                <div class="my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>               
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--  Monthly card end  -->   
                </div>

                <div>
                    <!--  Monthly card start  -->
                    <div class="pl-1 w-full h-28 bg-yellow-200 rounded-lg shadow-md">
                        <a href="#">
                            <div class="flex w-full h-full py-2 px-4 bg-gray-200 hover:bg-gray-300 transition-all ease-in-out text-gray-700 rounded-lg justify-between">
                                <div class="my-auto">
                                    <p class="font-bold">TOTAL TIRES SOLD</p>
                                    <p class="text-lg">{{ $total_tyres_sold }}</p>
                                </div>
                                <div class="my-auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                                    </svg>        
                                </div>
                            </div>
                        </a>
                    </div>
                    <!--  Monthly card end  -->   
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white pb-5 mt-5">
        <div class="mx-5 pt-5">
            <div class="md:grid grid-cols-3 gap-5">
                <div>@livewire('sales-by-model')</div>
                <div>@livewire('sales-by-size')</div>
                <div>@livewire('sales-by-type')</div>
            </div>
        </div>
    </div>

@endsection