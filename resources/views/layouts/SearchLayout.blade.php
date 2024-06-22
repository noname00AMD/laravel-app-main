<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{ $title }}</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- @vite('resources/sass/app.sass') --}}
    {{-- <link rel="stylesheet" href="/css/app.css"> --}}
    <!-- <link rel="stylesheet" href="/css/home.css"> -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> --}}
    {{-- <script src="https://unpkg.com/htmx.org@1.9.6"
        integrity="sha384-FhXw7b6AlE/jyjlZH5iHa/tTe9EpJ1Y55RjcgPbjeWMskSxZt1v9qkxLJWNJaGni" crossorigin="anonymous">
    </script> --}}
</head>

<body>

    <x-Header :$time />

    @yield('content')
    <x-Footer />


</body>

</html>
