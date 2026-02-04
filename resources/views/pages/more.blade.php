@extends('layouts.app')

@section('title', 'More')

@section('content')
<div class="container py-3">
    @include('partials.more-nav')

    <h1 class="mb-3">More About DIO Green Hilltop</h1>
    <p>
        Welcome to Dio Green Hilltop, where comfort meets luxury. Our hotel offers a perfect blend of modern amenities and warm hospitality to make your stay memorable. From elegantly designed rooms to exquisite dining options, we ensure every guest experiences relaxation and convenience. Whether you are here for business or leisure, our dedicated staff is committed to providing personalized service, creating an unforgettable experience for you.
    </p>

    <img src="{{ asset('images/more.jpg')}}" alt="garden" style="width: 30rem; height:20rem;">
</div>
@endsection
