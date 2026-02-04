@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<div class="container py-3">
    @include('partials.more-nav')

    <h1 class="mb-3">Gallery</h1>

    <div class="row g-3">
        {{-- Replace with your real images in public/storage --}}
        <div class="col-md-4">
            <img src="{{ asset('images/outside.jpg') }}" class="img-fluid rounded" alt="outside">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/decos.jpg') }}" class="img-fluid rounded" alt="decos">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/dinningarea.jpg') }}" class="img-fluid rounded" alt="dinningarea">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/roomdeco.jpg') }}" class="img-fluid rounded" alt="roomdeco">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/home.jpg') }}" class="img-fluid rounded" alt="home">
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/hospitality.jpg') }}" class="img-fluid rounded" alt="hospitality">
        </div>
        
        

    </div>
</div>
@endsection
