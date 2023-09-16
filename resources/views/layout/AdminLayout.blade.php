<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $title }}</title>
    <link rel="stylesheet"  href="/css/app.css">
    <link rel="stylesheet"  href="/css/admin.css">
    {{-- <link rel="preload" as="style" href="/css/app.css">
    <link rel="preload" as="style" href="/css/admin.css"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
 @livewireScripts
  
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <x-Header :$time  />
    <div class="cont">
        <div class="row">
            <x-NavigationBar  />
            @yield("content")
        </div>
    </div>
    <x-Footer />
</body>

</html>
