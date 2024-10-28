<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }} Subscriptions</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css'])
        @stack('styles') {{-- For page-specific styles --}}
        <link rel="icon" href='favicon.svg'" type="images/svg+xml"/>        
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="bg-zinc-50  text-dark">
            <!-- Start Content -->
            <div class="relative">               
                <div class="place-content-center flex">
                    <div class="flex w-full">                        
                        <div class="p-10 flex flex-col items-center w-full md:w-1/2 pt-44">
                            <x-app-logo size="h-56 w-56" />
                            <h2 class="text-4xl my-8">Two Shakes Review</h2>
                            <div class="max-w-3/4 mx-auto w-full">                               
                            {{ $slot }}                               
                            </div>
                        </div>
                        <div class="lg:flex w-1/2 bg-sky-700 flex-col h-dvh bg-google-pattern bg-no-repeat bg-cover bg-bottom">
                            <div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->
        </div>    
        @vite('resources/js/app.js') 
        @stack('scripts')
    </body>
</html>