@extends('layouts.dashboard')

@section('content')

<style>


body{

    background: linear-gradient(to right, #021b12, #0b3d2e) !important;

    min-height: 100vh;
}

.feedback-card{

    background: #1a1f2e !important;

    border: 1px solid rgba(255,255,255,0.08);

    border-radius: 20px;

    padding: 25px;

    max-width: 550px;

    margin: auto;

    box-shadow: 0 15px 35px rgba(0,0,0,0.4);
}

.feedback-title{

    color: #22c55e;

    font-size: 30px;

    font-weight: bold;

    font-family: 'Playfair Display', serif;

    margin-bottom: 10px;
}

.feedback-subtitle{

    color: #6c757d;

    margin-bottom: 25px;
}

.feedback-label{

    font-weight: 600;

    margin-bottom: 8px;

    color: white !important;
}

.feedback-input{

    background: #2a3142 !important;

    color: white !important;

    border: 1px solid #3d4558 !important;
}

.feedback-input::placeholder{

    color: rgba(255,255,255,0.5);
}


.feedback-input:focus{

    border-color: #22c55e;

    box-shadow: 0 0 10px rgba(34,197,94,0.25);
}

.feedback-btn{

    background: #22c55e;

    border: none;

    padding: 12px 25px;

    border-radius: 12px;

    font-weight: bold;

    transition: 0.3s;
}

.feedback-btn:hover{

    background: #16a34a;

    transform: translateY(-2px);
}




.review-icon{

    font-size: 60px;

    text-align: center;

    display: block;

    margin-bottom: 15px;
}

</style>

<div class="container py-3">

    <div class="feedback-card">

        <div class="text-center">

            <span class="review-icon">⭐</span>

            <h1 class="feedback-title">
                Share Your Experience
            </h1>

            <p class="feedback-subtitle">
                Tell us about your stay at DIO Green Hilltop
            </p>

        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('user.feedbacks.store') }}" method="POST">

            @csrf

            <div class="mb-3">

                <label class="feedback-label">
                    Your Name
                </label>

                <input
                    type="text"
                    name="subject"
                    class="form-control feedback-input"
                    value="{{ old('subject') }}"
                    placeholder="Enter your name">

                @error('subject')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="mb-4">

                <label class="feedback-label">
                    Your Feedback
                </label>

                <textarea
                    name="message"
                    rows="6"
                    class="form-control feedback-input"
                    placeholder="Share your experience with us..."
                    required>{{ old('message') }}</textarea>

                @error('message')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="text-center">

                <button
                    type="submit"
                    class="btn feedback-btn">

                    Submit Feedback

                </button>

            </div>

        </form>

    </div>

</div>

@endsection