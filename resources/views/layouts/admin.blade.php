<!DOCTYPE html>
<html>
<head>
    <title>My Hotel Admin - @yield('title', 'Admin Dashboard')</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    {{-- Admin favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    {{-- or for PNG: --}}
    {{-- <link rel="icon" type="image/png" href="{{ asset('images/admin-favicon.png') }}"> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    {{-- @include('partials.admin-navbar')  --}}
    {{-- optional if you have it --}}
    

    <div class="container py-4">
        @yield('content')
    </div>
</body>
</html>
