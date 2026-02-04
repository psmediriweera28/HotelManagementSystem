@extends('layouts.app')

@section('title', 'Special Offers')
@section('content')
<div class="container py-3">
    @include('partials.more-nav')

    <h1 class="mb-3">Special Offers</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">Weekend Getaway</h5>
            <p class="card-text">
                Stay 2 nights and get 10% off on room rates with complimentary breakfast.
            </p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Long Stay Offer</h5>
            <p class="card-text">
                Book 5 nights or more and enjoy a special discounted rate.
            </p>
        </div>
    </div>
</div>
@endsection
