@extends('layouts.app')

@section('title', 'Special Offers')

@section('content')

<style>

.offers-section{

    min-height: 100vh;

    background:
    linear-gradient(rgba(0,0,0,0.8),
    rgba(0,0,0,0.8)),

    url('{{ asset('images/home2.jpg') }}');

    background-size: cover;

    background-position: center;

    padding: 20px 0;
}

.offers-title{

    font-family: 'Playfair Display', serif;

    font-size: 40px;

    font-weight: bold;

    color: white;

    text-align: center;

    margin-bottom: 15px;
}

.offers-subtitle{

    text-align: center;

    color: rgba(255,255,255,0.75);

    margin-bottom: 50px;

    font-size: 18px;
}

.offer-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius: 25px;

    padding: 40px;

    color: white;

    height: 100%;

    transition: 0.4s ease;

    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

.offer-card:hover{

    transform: translateY(-10px);
}

.offer-badge{

    display: inline-block;

    background: #22c55e;

    color: white;

    padding: 8px 18px;

    border-radius: 30px;

    font-size: 14px;

    margin-bottom: 20px;

    font-weight: bold;
}

.offer-title{

    font-family: 'Playfair Display', serif;

    font-size: 32px;

    margin-bottom: 20px;
}

.offer-text{

    color: rgba(255,255,255,0.8);

    line-height: 1.8;

    margin-bottom: 30px;
}

.offer-btn{

    background: #16a34a;

    border: none;

    padding: 12px 30px;

    border-radius: 12px;

    font-weight: bold;

    transition: 0.3s ease;
}

.offer-btn:hover{

    background: #15803d;

    transform: translateY(-3px);
}

</style>

<section class="offers-section">

<div class="container">


@include('partials.more-nav')

<h1 class="offers-title">
    Special Offers
</h1>

<p class="offers-subtitle">
    Discover exclusive deals and luxury experiences at DIO Green Hilltop.
</p>

<div class="row g-4">

    <!-- OFFER 1 -->
    <div class="col-lg-6">

        <div class="offer-card">

            <span class="offer-badge">
                10% OFF
            </span>

            <h3 class="offer-title">
                Weekend Getaway
            </h3>

            <p class="offer-text">

                Stay 2 nights and receive 10% off on room rates
                with complimentary breakfast and free Wi-Fi access.

            </p>

            <a href="/booking"
            class="btn offer-btn">

                Book Now

            </a>

        </div>

    </div>

    <!-- OFFER 2 -->
    <div class="col-lg-6">

        <div class="offer-card">

            <span class="offer-badge">
                LIMITED OFFER
            </span>

            <h3 class="offer-title">
                Long Stay Package
            </h3>

            <p class="offer-text">

                Book 5 nights or more and enjoy exclusive discounted
                rates with premium hospitality services included.

            </p>

            <a href="/booking"
            class="btn offer-btn">

                Reserve Today

            </a>

        </div>

    </div>

</div>


</div>

</section>

@endsection
