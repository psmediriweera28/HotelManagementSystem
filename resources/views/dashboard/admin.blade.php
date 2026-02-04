@extends('layouts.app')

@section('content')

<style>
    .btn{
        font-weight: 500;
    }
    .btn:hover{
        color: green;
        font-weight: 500;
    }
    .collapse{
        font-weight: 700;
    }
    .nav-link:hover{
        color: green;
    }

    body {
        background: #e8ebdf;
    }
    .dashboard-wrapper {
        max-width: 1200px;
        margin: 20px auto;
        border-radius: 24px;
        background: #ffffff;
        padding: 24px;
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        border: 6px solid #1c9b63;
    }
    .dash-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 22px;
    }
    .dash-header h4 {
        font-weight: 600;
        color: #1c9b63;
    }
    .dash-header .admin-name {
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
    }
    .dash-header .avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: #1c9b63;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 14px;
    }

    .card-soft {
        border: none;
        border-radius: 18px;
        background: #f4f6f5;
        padding: 18px 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.04);
        height: 100%;
    }
    .card-soft h6 {
        font-size: 13px;
        text-transform: uppercase;
        letter-spacing: .08em;
        color: #7b8b83;
        margin-bottom: 6px;
    }
    .card-soft .big-number {
        font-size: 26px;
        font-weight: 600;
        color: #1c9b63;
        margin-bottom: 0;
    }
    .card-soft .small-text {
        font-size: 11px;
        color: #9aa6a0;
    }
    .badge-pill-green {
        background: #1c9b63;
        color: #fff;
        border-radius: 999px;
        padding: 4px 12px;
        font-size: 11px;
    }
    .btn-soft-green {
        background: #1c9b63;
        color: #fff;
        border-radius: 999px;
        padding: 4px 14px;
        font-size: 11px;
        border: none;
    }
    .btn-soft-green:hover {
        background: #177c4f;
        color: #fff;
    }

    .activity-dot {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        margin-right: 8px;
    }
    .dot-green { background: #1c9b63; }
    .dot-yellow { background: #f6c344; }
    .dot-red { background: #e55353; }

    .progress-circle {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background:
            conic-gradient(#1c9b63 calc(var(--value) * 1%), #dfe6e1 0);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }
    .progress-circle-inner {
        width: 85px;
        height: 85px;
        border-radius: 50%;
        background: #f4f6f5;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
        color: #1c9b63;
        font-size: 20px;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin Panel</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#adminNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.rooms') }}">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.bookings') }}">Booking</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.food-menus.index') }}">Food Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.food-orders.index') }}">Food Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.feedbacks.index') }}">Feedback</a>
                </li>
            </ul>

            <span class="navbar-text me-3">
                {{ auth()->user()->name }} (Admin)
            </span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-sm">Logout</button>
            </form>
        </div>
    </div>
</nav>

<div class="dashboard-wrapper">
    <div class="dash-header">
        <h4>Dashboard</h4>
        <div class="admin-name">
            <div class="avatar">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>
            <span>{{ auth()->user()->name ?? 'Administrator' }}</span>
        </div>
    </div>

    {{-- top hero text + image --}}
    {{-- <section class="mb-4">
        <div class="d-flex flex-column flex-md-row align-items-center">
            <img src="{{ asset('images/admin-dashboard-image.jpg') }}"
                 alt="dash-board-image"
                 class="user-bg"
                 style="height: 220px; width: auto; object-fit: cover; border-radius:18px;">

            <div class="d-flex justify-content-center align-items-center w-100 mt-3 mt-md-0 ms-md-4">
                <div style="width: 100%;">
                    <h2 class="mb-0" style="font-family: 'Montserrat', sans-serif; color:green;">
                        Hello {{ auth()->user()->name }},
                    </h2>
                    <br>
                    <h5>Admin Dashboard Access Granted</h5>

                    <p class="mb-0" style="font-size: 14px;">
                        You are now in control of hotel operations and system management.
                        Monitor bookings, manage rooms, track food orders and review feedback
                        in real time as new data comes in.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- stats row 1: bookings, food orders, feedbacks --}}
    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <div class="card-soft">
                <h6>Bookings</h6>
                <p class="big-number">{{ number_format($totalBookings ?? 0) }}</p>
                <p class="small-text">
                    Today: {{ $todayBookings ?? 0 }} · This month: {{ $monthBookings ?? 0 }}
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-soft">
                <h6>Food Orders</h6>
                <p class="big-number">{{ number_format($totalFoodOrders ?? 0) }}</p>
                <p class="small-text">
                    Today: {{ $todayFoodOrders ?? 0 }}
                </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-soft">
                <h6>Feedbacks</h6>
                <p class="big-number">{{ number_format($totalFeedbacks ?? 0) }}</p>
                <p class="small-text">
                    New this week: {{ $newFeedbacks ?? 0 }}
                </p>
            </div>
        </div>
    </div>

    {{-- stats row 2: overview + occupancy progress + activity --}}
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card-soft">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6>Overview</h6>
                </div>

                <div class="mb-2 d-flex justify-content-between align-items-center">
                    <span class="badge-pill-green">
                        New bookings today +{{ $todayBookings ?? 0 }}
                    </span>
                    <span class="small-text">Today</span>
                </div>

                <div class="mb-1 d-flex justify-content-between small-text">
                    <span>Total rooms</span>
                    <span>{{ $totalRooms ?? 0 }}</span>
                </div>
                <div class="mb-1 d-flex justify-content-between small-text">
                    <span>Occupied rooms</span>
                    <span>{{ $occupiedRooms ?? 0 }}</span>
                </div>
                <div class="mb-1 d-flex justify-content-between small-text">
                    <span>Available rooms</span>
                    <span>{{ $availableRooms ?? 0 }}</span>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-soft text-center">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6>Occupancy</h6>
                    <button class="btn-soft-green">View All</button>
                </div>

                @php
                    $occupancyPercent = $occupancyPercent ?? 0; // 0–100
                @endphp
                <div class="progress-circle" style="--value: {{ $occupancyPercent }}">
                    <div class="progress-circle-inner">
                        {{ $occupancyPercent }}%
                    </div>
                </div>

                <p class="small-text mt-2">
                    Room occupancy this month
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-soft">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6>Activity</h6>
                    <button class="btn-soft-green">View All</button>
                </div>

                <div class="d-flex align-items-start mb-2 small-text">
                    <div class="activity-dot dot-green"></div>
                    <div>
                        Pending payments: {{ $pendingPayments ?? 0 }}
                    </div>
                </div>
                <div class="d-flex align-items-start mb-2 small-text">
                    <div class="activity-dot dot-yellow"></div>
                    <div>
                        Upcoming check-ins today: {{ $todayCheckins ?? 0 }}
                    </div>
                </div>
                <div class="d-flex align-items-start small-text">
                    <div class="activity-dot dot-red"></div>
                    <div>
                        Cancelled bookings this month: {{ $cancelledBookings ?? 0 }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
