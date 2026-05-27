@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="bg-dark text-white text-center p-5 rounded shadow">

    <h1 class="display-3 fw-bold">
        Welcome to DIO Green Hilltop
    </h1>

    <p class="lead mt-3">
        Experience luxury, comfort and unforgettable stays.
    </p>

    <a href="#" class="btn btn-warning btn-lg mt-3">
        Book Your Stay
    </a>

</div>

<!-- FEATURES -->
<div class="container mt-5">

    <div class="row text-center">

        <div class="col-md-4">
            <div class="card shadow p-4 border-0">

                <h3>Luxury Rooms</h3>

                <p>
                    Modern rooms with premium comfort.
                </p>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-4 border-0">

                <h3>Swimming Pool</h3>

                <p>
                    Relax with our luxury outdoor pool.
                </p>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow p-4 border-0">

                <h3>Restaurant</h3>

                <p>
                    Enjoy delicious food and beverages.
                </p>

            </div>
        </div>

    </div>

</div>

@endsection