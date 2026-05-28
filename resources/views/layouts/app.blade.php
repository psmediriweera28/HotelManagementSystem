<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIO Green Hilltop</title>

    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- google font --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">

    
</head>
<body style="background-color: #0a240b; color:white;">
    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <style>
        footer a:hover{
    color:#22c55e !important;
    transition:0.3s;
}
    </style>
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
