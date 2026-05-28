@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="hero-section">
<div class="bg-dark text-white text-center p-5 rounded shadow" style="
    background-image:url({{ asset('images/home.jpg')}});

    position: relative;
    
    background-image: url('{{ asset('images/home.jpg') }}');

    background-size: cover;
    background-position: center;

    animation: slider 15s infinite, zoomEffect 15s infinite;

    background-size: cover;
    background-position: center;
    
    display: flex;
    flex-direction: column;
    justify-content: center;
">

    <h1 class="display-3 fw-bold" style="font-family: 'Playfair Display', serif;">
        DIO Green Hilltop
    </h1>

    <p class="lead mt-3">
        Experience luxury, comfort and unforgettable stays.
    </p>

    <a href="{{ route('booking')}}" class="btn btn-success border-t-green-600 btn-lg mt-3">
        Book Your Stay
    </a>

</div>
</div>

<style>

    .hero-section{
    
}

    @keyframes slider{

    0%{
        background-image:
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('{{ asset('images/homenew.jpg') }}');
    }

    33%{
        background-image:
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('{{ asset('images/home.jpg') }}');
    }

    66%{
        background-image:
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('{{ asset('images/home2.jpg') }}');
    }

    100%{
        background-image:
        linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('{{ asset('images/home04.jpg') }}');
    }

    @keyframes zoomEffect {

    0%{
        transform: scale(1) translateX(0);
    }

    25%{
        transform: scale(1.1) translateX(-20px);
    }

    50%{
        transform: scale(1.15) translateX(-40px);
    }

    75%{
        transform: scale(1.1) translateX(-20px);
    }

    100%{
        transform: scale(1) translateX(0);
    }

}

</style>


<!-- FEATURES -->
<div class="container mt-4">

    <div class="row text-center" style="font-family: 'Montserrat', sans-serif;">

        <div class="col-md-4 mb-3">
            <div class="card bg-transparent shadow p-4 border border-light text-white">

                <h3>Luxury Rooms</h3>

                <p>
                    Modern rooms with premium comfort.
                </p>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-transparent shadow p-4 border border-light text-white">

                <h3>Swimming Pool</h3>

                <p>
                    Relax with our luxury outdoor pool.
                </p>

            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card bg-transparent shadow p-4 border border-light text-white">

                <h3>Restaurant</h3>

                <p>
                    Enjoy delicious food and beverages.
                </p>

            </div>
        </div>

    </div>

</div>


<!-- FOOTER -->
<footer class="mt-5 text-white pt-5 pb-3"
style="background: rgb(14, 75, 37);">

    <div class="container">

        <div class="row text-center justify-content-center" style="font-family: 'Playfair Display', serif;">

            <!-- HOTEL INFO -->
            <div class="col-md-3 mb-4 text-center">

                <h3 class="fw-bold">
                    DIO Green Hilltop
                </h3>

                <p class="mt-3">
                    Experience luxury, comfort and unforgettable stays
                    with premium hospitality services.
                </p>

            </div>

            <!-- QUICK LINKS -->
            <div class="col-md-4 mb-4">

                <h4 class="fw-bold">
                    Quick Links
                </h4>

                <ul class="list-unstyled mt-3">

                    <li>
                        <a href="/" class="text-white text-decoration-none">
                            Home
                        </a>
                    </li>

                    <li class="mt-2">
                        <a href="/rooms" class="text-white text-decoration-none">
                            Rooms
                        </a>
                    </li>

                    <li class="mt-2">
                        <a href="/booking" class="text-white text-decoration-none">
                            Booking
                        </a>
                    </li>

                    <li class="mt-2">
                        <a href="/contact-us" class="text-white text-decoration-none">
                            Contact
                        </a>
                    </li>

                </ul>

            </div>

            <!-- CONTACT INFO -->
            <div class="col-md-4 mb-4">

                <h4 class="fw-bold">
                    Contact Us
                </h4>

                <p class="mt-3">
                    📍 Nuwara Eliya, Sri Lanka
                </p>

                <p>
                    📞 +94 77 123 4567
                </p>

                <p>
                    ✉ diogreenhilltop@gmail.com
                </p>

            </div>

        </div>

        <hr style="border-color:rgba(255,255,255,0.2);">

        <!-- COPYRIGHT -->
        <div class="text-center">

            <p class="mb-0">
                © 2026 DIO Green Hilltop | All Rights Reserved
            </p>

        </div>

    </div>

</footer>

@endsection