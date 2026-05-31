@extends('layouts.app')

@section('content')

<style>

body{

    background: linear-gradient(to right, #021b12, #0b3d2e);
}

/* NAVBAR */

.user-navbar{

    background: rgba(255,255,255,0.08) !important;

    backdrop-filter: blur(12px);

    border-radius: 20px;

    margin-top: 20px;

    padding: 12px 20px;

    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
}

.user-navbar .nav-link{

    color: white !important;

    font-weight: 500;

    transition: 0.3s ease;
}

.user-navbar .nav-link:hover{

    color: #22c55e !important;
}

.user-navbar .navbar-brand{

    color: white !important;

    font-size: 22px;

    font-weight: bold;
}

/* DASHBOARD SECTION */

.dashboard-section{

    padding-top: 10px;

    padding-bottom: 40px;
}

.dashboard-card{

    background:
    linear-gradient(rgba(0,0,0,0.65),
    rgba(0,0,0,0.65)),

    url('{{ asset('images/user-dashboard-image.jpg') }}');

    background-size: cover;

    background-position: center;

    border-radius: 30px;

    padding: 60px;

    min-height: 650px;

    display: flex;

    align-items: center;

    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
}

.dashboard-image{

    width: 100%;

    height: 500px;

    object-fit: cover;

    border-radius: 25px;

    transition: 0.4s ease;
}

.dashboard-image:hover{

    transform: scale(1.03);
}

.dashboard-subtitle{

    color: #22c55e;

    font-size: 24px;

    margin-bottom: 15px;
}

.dashboard-title{

    color: white;

    font-size: 52px;

    font-weight: bold;

    line-height: 1.2;
}

.dashboard-text{

    color: rgba(255,255,255,0.8);

    font-size: 18px;

    line-height: 1.8;

    margin-top: 25px;
}

.dashboard-btn{

    background: #22c55e;

    color: white;

    border: none;

    padding: 12px 28px;

    border-radius: 12px;

    font-weight: bold;

    text-decoration: none;

    transition: 0.3s ease;

    margin-right: 15px;
}

.dashboard-btn:hover{

    background: #16a34a;

    transform: translateY(-3px);

    color: white;
}

.logout-btn{

    border-radius: 10px;
}

/* MOBILE */

@media(max-width:768px){

    .dashboard-title{

        font-size: 38px;
    }

    .dashboard-image{

        height: 350px;

        margin-bottom: 30px;
    }
}

</style>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg user-navbar">


<div class="container">

    <a class="navbar-brand"
    href="{{ route('user.dashboard') }}">

        User Dashboard

    </a>

    <button class="navbar-toggler"
    type="button"

    data-bs-toggle="collapse"

    data-bs-target="#userNav">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse"
    id="userNav">

        <ul class="navbar-nav me-auto ms-4">

            <li class="nav-item">

                <a class="nav-link"
                href="{{ route('user.rooms') }}">

                    Rooms

                </a>

            </li>

            <li class="nav-item">

                <a class="nav-link"
                href="{{ route('user.food-menus') }}">

                    Food Menus

                </a>

            </li>

            <li class="nav-item">

                <a class="nav-link"
                href="{{ route('user.feedbacks') }}">

                    Feedbacks

                </a>

            </li>

            <li class="nav-item">

                <a class="nav-link"
                href="{{ route('user.payments') }}">

                    Payments

                </a>

            </li>

        </ul>

        <span class="text-white me-3">

            {{ auth()->user()->name }}

        </span>

        <form method="POST"
        action="{{ route('logout') }}">

            @csrf

            <button class="btn btn-outline-light logout-btn">

                Logout

            </button>

        </form>

    </div>

</div>


</nav>

<!-- DASHBOARD -->

<section class="dashboard-section">

<div class="container">

<div class="dashboard-card">

<div class="row align-items-center w-100">


<!-- IMAGE -->

<div class="col-lg-5">

    <img src="{{ asset('images/user-dashboard-image.jpg') }}"

    alt="Dashboard Image"

    class="dashboard-image">

</div>

<!-- CONTENT -->

<div class="col-lg-6 ps-lg-5">

    <h4 class="dashboard-subtitle">

        Hello {{ auth()->user()->name }} 👋

    </h4>

    <h1 class="dashboard-title">

        Welcome Back to
        DIO Green Hilltop

    </h1>
    

    <p class="dashboard-text">

        You have successfully logged in to your account.
        Access your bookings, food menus, payments,
        and exclusive hotel services with ease.

        We wish you a relaxing and memorable stay.

    </p>

    <div class="mt-4">

        <a href="{{ route('booking') }}"

        class="dashboard-btn">

            Book Room

        </a>

        <a href="{{ route('user.payments') }}"

        class="dashboard-btn">

            Payments

        </a>

    </div>

</div>


</div>

</div>

</div>

</section>

@endsection
