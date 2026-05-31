@extends('layouts.app')

@section('title', 'More')

@section('content')

<style>

.more-section{

    min-height: 100vh;

    background:
    linear-gradient(rgba(0,0,0,0.75),
    rgba(0,0,0,0.75)),

    url('{{ asset('images/home2.jpg') }}');

    background-size: cover;

    background-position: center;

    padding: 30px 0;

    
}

.more-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius: 25px;

    padding: 50px;

    color: white;

    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
}

.more-title{

    font-family: 'Playfair Display', serif;

    font-size: 40px;

    font-weight: bold;

    margin-bottom: 25px;
}

.more-text{

    font-size: 18px;

    line-height: 1.9;

    color: rgba(255,255,255,0.85);
}

.more-image{

    width: 100%;

    height: 100%;

    max-height: 450px;

    object-fit: cover;

    border-radius: 20px;

    transition: 0.5s ease;

    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
}

.more-image:hover{

    transform: scale(1.03);
}

.explore-btn{

    background: #16a34a;

    border: none;

    padding: 14px 35px;

    border-radius: 12px;

    font-weight: bold;

    margin-top: 30px;

    transition: 0.3s ease;
}

.explore-btn:hover{

    background: #15803d;

    transform: translateY(-3px);
}

</style>

<section class="more-section">

<div class="container">

    @include('partials.more-nav')

    <div class="row align-items-center  mt-3">

        <!-- LEFT SIDE -->
        <div class="col-lg-6">

            <div class="more-card">

                <h1 class="more-title">
                    Discover DIO Green Hilltop
                </h1>

                <p class="more-text">

                    Welcome to DIO Green Hilltop, where comfort meets luxury.
                    Our hotel offers a perfect blend of modern amenities
                    and warm hospitality to make your stay memorable.

                    From elegantly designed rooms to exquisite dining options,
                    we ensure every guest experiences relaxation and convenience.

                    Whether you are here for business or leisure,
                    our dedicated staff is committed to providing
                    personalized service and unforgettable experiences.

                </p>

                <a href="/booking"
                class="btn explore-btn">

                    Book Your Stay

                </a>

            </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-6">

            <img
            src="{{ asset('images/more.jpg')}}"

            alt="Hotel View"

            class="more-image">

        </div>

    </div>

</div>

</section>

@endsection