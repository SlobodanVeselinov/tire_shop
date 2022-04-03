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
    <div class="sm:flex">    

        {{-- Sidebar Navigation links --}}
        @include('admin.includes.side-bar')

        {{-- Right side content --}}
        <div class="w-full bg-gray-200 min-h-screen sm:ml-64">

            {{-- Right side header --}}
            <div class="h-16 bg-gray-900 flex items-center text-gray-200">
                @include('admin.includes.header-navigation')
            </div>

            {{-- Main content area --}}
            <div class="p-5">
                @yield('content')
            </div> 
        </div>
    </div>
    @livewire('livewire-ui-modal')
    @include('sweetalert::alert')
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/sweatAlertFunctions.js') }}" defer></script>

    {{-- JavaScript code for the hamburger menu button on small screen sizes --}}
    <script>
        // Grab HTML Elements
        const btn = document.querySelector(".btn");
        const menu = document.querySelector(".menu");

        // Add Event Listeners
        btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        });
    </script>

</body>
</html>
