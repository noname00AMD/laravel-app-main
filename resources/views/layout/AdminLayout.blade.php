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
    <script src="https://unpkg.com/react@18/umd/react.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/redux/4.0.5/redux.js"></script>
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
