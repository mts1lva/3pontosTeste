<?php

declare(strict_types=1);

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-white antialiased" style="background-color: #0f0f10">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <div class="w-64 flex-shrink-0" style="background-color: #1a1a1b; border-right: 1px solid #2d2d30">
                @include('components.sidebar')
            </div>

            <!-- Main Content -->
            <div class="flex flex-1 flex-col">
                <!-- Header -->
                <header class="px-6 py-4" style="background-color: #1a1a1b; border-bottom: 1px solid #2d2d30">
                    @include('components.header')
                </header>

                <!-- Page Content -->
                <main class="flex-1 p-6">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
<?php 
