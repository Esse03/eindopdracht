<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-100">
<div class="flex items-center justify-center min-h-screen">
    <div class="text-center">
        <h1 class="text-4xl font-bold">{{ config('app.name') }}</h1>
        <p class="mt-4 text-lg">The weird made up animal collection</p>

        @if (Route::has('login'))
            <div class="mt-6">
                @auth
                    @include('layouts.navigation')
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endauth
            </div>
        @endif
    </div>
</div>
</body>
</html>
