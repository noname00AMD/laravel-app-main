<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/home.css">
 @livewireScripts

</head>

<body>
    {{-- <x-Header :$time  /> --}}
    <livewire:header /> 
    @yield('content')
    
    <livewire:footer /> 
    {{-- <x-Footer /> --}}
</body>

</html>
