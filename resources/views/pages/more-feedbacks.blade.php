@extends('layouts.app')

@section('title', 'Guest Feedbacks')

@section('content')

<style>

.feedback-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius: 20px;

    padding: 30px;

    color: white;

    height: 100%;

    transition: 0.4s ease;

    box-shadow: 0 10px 30px rgba(0,0,0,0.4);
}

.feedback-card:hover{

    transform: translateY(-8px);
}

.feedback-title{

    font-family: 'Playfair Display', serif;

    margin-bottom: 20px;
}

.feedback-text{

    color: rgba(255,255,255,0.8);

    line-height: 1.8;
}

.feedback-user{

    color: #22c55e;

    font-weight: bold;
}

</style>

<div class="container py-3">
    @include('partials.more-nav')

    <h1 class="mb-3">Guest Feedbacks</h1>

    <div class="row g-4">

@foreach($feedbacks as $feedback)

<div class="col-md-6">

    <div class="feedback-card">

        <h4 class="feedback-title">

            “Wonderful Experience”

        </h4>

        <p class="feedback-text">

            {{ $feedback->message }}

        </p>

        <small class="feedback-user">

            - {{ $feedback->user->name ?? 'Guest User' }}

        </small>

    </div>

</div>

@endforeach

</div>
</div>
@endsection
