@extends('layouts.app')

@section('content')

{{-- <style>
    .user-bg{
        
        
        margin-left: 5rem;
        width: 30rem;
        height: 30rem;
        
    }

    .user-dashboard-card{
        align-items:flex-end;
    }
</style> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.dashboard') }}">User Dashboard</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#userNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="userNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.rooms') }}">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.food-menus') }}">Food Menus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.feedbacks') }}">Feedbacks</a>
                </li>
               <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.payments') }}">Payments</a>
                </li>
               
            </ul>

            <span class="navbar-text me-3">
                {{ auth()->user()->name }}
            </span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-outline-danger btn-sm">Logout</button>
            </form>
        </div>
    </div>
</nav>

{{-- User dashboard content here --}}

<section>
    <div class="d-flex flex-column flex-md-row align-items-center">
        {{-- Image: top on mobile, left on desktop --}}
        <img src="{{ asset('images/user-dashboard-image.jpg') }}"
             alt="dash-board-image"
             class="user-bg"
             style="height: 400px; width: auto; object-fit: cover;">

        {{-- Text: below on mobile, right on desktop --}}
        <div class="d-flex justify-content-center align-items-center w-100 mt-3 mt-md-0 ms-md-4">
            <div style="width: 100%;">
                <h2 class="mb-0" style="font-family: 'Montserrat', sans-serif; color:green;">
                    Hello {{ auth()->user()->name }},
                </h2>
                <br>
                <h3>Welcome back to our Hotel System</h3>

                <p>
                    You have successfully logged in to your account. Access your reservations, services,
                    and exclusive offers with ease. We wish you a pleasant and relaxing stay.
                </p>
            </div>
        </div>
    </div>
</section>


@endsection
