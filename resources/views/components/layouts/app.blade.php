<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My Laravel App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    @livewireStyles
</head>
<body class="h-full flex flex-col">
    {{-- @include('components.header')

    <div class="container flex-grow p-8">
        @yield('content')
    </div>

    @include('components.footer') --}}
    {{ $slot }}
    @livewireScripts
    <script src="{{ url('js/app.js') }}"></script>
</body>
</html>
