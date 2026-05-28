@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<style>

.contact-section{

    min-height: 100vh;

    background:
    linear-gradient(rgba(0,0,0,0.75),
    rgba(0,0,0,0.75)),

    url('{{ asset('images/home3.jpg') }}');

    background-size: cover;

    background-position: center;
}

.contact-title{

    font-family: 'Playfair Display', serif;

    font-size: 50px;

    /* font-weight: bold; */

    text-align: center;

    color: white;

    margin-bottom: 20px;
}

.contact-subtitle{

    text-align: center;

    color: rgba(255,255,255,0.8);

    max-width: 700px;

    margin: auto;

    margin-bottom: 50px;
}

.contact-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius: 25px;

    padding: 40px;

    color: white;

    box-shadow: 0 15px 35px rgba(0,0,0,0.5);

    transition: 0.4s ease;

    height: 100%;
}

.contact-card:hover{

    transform: translateY(-8px);
}

.contact-info{

    margin-bottom: 10px;

    font-size: 18px;

    font-family: 'Montserrat', sans-serif;
}

.contact-info strong{

    color: #22c55e;
}

.contact-card a{

    color: white;

    text-decoration: none;
}

.contact-card a:hover{

    color: #22c55e;
}

.map-frame{

    width: 100%;

    height: 100%;

    min-height: 450px;

    border: 0;

    border-radius: 25px;

    box-shadow: 0 15px 35px rgba(0,0,0,0.5);

    transition: 0.4s ease;
}

.map-frame:hover{

    transform: scale(1.02);
}

</style>

<section class="contact-section py-3">

<div class="container">

<h1 class="contact-title">
    Contact DIO Green Hilltop
</h1>

<p class="contact-subtitle">
    Experience luxury hospitality in the beautiful hills of Nuwara Eliya.
    We are always ready to assist you with bookings and inquiries.
</p>

<div class="row g-4 align-items-stretch">

    <!-- LEFT SIDE -->
    <div class="col-lg-6">

        <div class="contact-card">

            <h3 class="mb-4"
            style="font-family:'Playfair Display', serif;">

                Hotel Details

            </h3>

            <p class="contact-info">
                📍 <strong>Address:</strong>
                No. 43, Green Hill Road, Nuwara Eliya, Sri Lanka
            </p>

            <p class="contact-info">
                📞 <strong>Phone:</strong>
                +94 76 123 4567
            </p>

            <p class="contact-info">
                ✉ <strong>Email:</strong>

                <a href="mailto:info@diogreenhilltop.com">
                    diogreenhilltop@gmail.com
                </a>
            </p>

            <p class="contact-info">
                🕒 <strong>Open:</strong>
                24 Hours Service Available
            </p>

        </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="col-lg-6">

        <iframe
            class="map-frame"

            src="https://www.google.com/maps?q=Nuwara+Eliya+Sri+Lanka&output=embed"

            allowfullscreen=""
            loading="lazy">

        </iframe>

    </div>

</div>


</div>

</section>

@endsection
