<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div>
            <div>
                <h2 class="text-xl">New order received</h2>
            </div>
            <div>
                <div>
                    <h3 class="w-full mb-3 bg-gray-600 text-gray-200 p-3">Customer Information</h3>
                    <p>Name: {{ $customer_name }}</p>
                    <p>Adress: {{ $customer_adress }}</p>
                    <p>Phone: {{ $customer_phone }}</p>
                </div>
                <div>
                    <h3 class="w-full mb-3 bg-gray-600 text-gray-200 p-3">Product Information</h3>
                    <p>Model: {{ $product_model }}</p>
                    <p>Type: {{ $product_type }}</p>
                    <p>Size: {{ $product_size }}</p>
                    <p>Quantity: {{ $quantity }}</p>
                </div>
            </div>
            <div>
                <a href="http://127.0.0.1:8000/admin/order" class="px-3 py-2 bg-gray-900 text-sm text-gray-200 rounded">View Order</a>
            </div>
        </div>
        

    
    </body>
</html>