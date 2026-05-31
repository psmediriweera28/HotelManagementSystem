@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

<style>

.gallery-section{

    min-height: 100vh;

    background:
    linear-gradient(rgba(0,0,0,0.8),
    rgba(0,0,0,0.8)),

    url('{{ asset('images/home.jpg') }}');

    background-size: cover;

    background-position: center;

    padding: 30px 0;
}

.gallery-title{

    font-family: 'Playfair Display', serif;

    font-size: 40px;

    font-weight: bold;

    color: white;

    text-align: center;

    margin-bottom: 15px;
}

.gallery-subtitle{

    text-align: center;

    color: rgba(255,255,255,0.75);

    margin-bottom: 50px;

    font-size: 18px;
}

.gallery-card{

    position: relative;

    overflow: hidden;

    border-radius: 20px;

    box-shadow: 0 10px 30px rgba(0,0,0,0.5);

    transition: 0.4s ease;
}

.gallery-card img{

    width: 100%;

    height: 300px;

    object-fit: cover;

    transition: 0.5s ease;
}

.gallery-card:hover img{

    transform: scale(1.08);
}

.gallery-overlay{

    position: absolute;

    inset: 0;

    background: rgba(0,0,0,0.35);

    opacity: 0;

    transition: 0.4s ease;
}

.gallery-card:hover .gallery-overlay{

    opacity: 1;
}

.gallery-card:hover{

    transform: translateY(-8px);
}

</style>

<section class="gallery-section">

<div class="container">


@include('partials.more-nav')

<h1 class="gallery-title">
    Hotel Gallery
</h1>

<p class="gallery-subtitle">
    Explore the beauty, comfort and elegance of DIO Green Hilltop.
</p>

<div class="row g-4">

    <div class="col-md-4">

        <div class="gallery-card">

            <img src="{{ asset('images/outside.jpg') }}"
            alt="Outside View">

            <div class="gallery-overlay"></div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="gallery-card">

            <img src="{{ asset('images/decos.jpg') }}"
            alt="Decorations">

            <div class="gallery-overlay"></div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="gallery-card">

            <img src="{{ asset('images/dinningarea.jpg') }}"
            alt="Dining Area">

            <div class="gallery-overlay"></div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="gallery-card">

            <img src="{{ asset('images/roomdeco.jpg') }}"
            alt="Room Decoration">

            <div class="gallery-overlay"></div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="gallery-card">

            <img src="{{ asset('images/home.jpg') }}"
            alt="Hotel View">

            <div class="gallery-overlay"></div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="gallery-card">

            <img src="{{ asset('images/hospitality.jpg') }}"
            alt="Hospitality">

            <div class="gallery-overlay"></div>

        </div>

    </div>

</div>


</div>

</section>

@endsection
