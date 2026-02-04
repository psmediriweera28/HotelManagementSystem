@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-4">Contact Us</h1>

            <p class="mb-4">
                DIO Green Hilltop is a peaceful hotel located in the hills of Nuwara Eliya,
                offering comfortable rooms and friendly service for families and travelers.
            </p>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Hotel Details</h5>

                    <p class="mb-1">
                        <strong>Hotel Name:</strong> DIO Green Hilltop
                    </p>
                    <p class="mb-1">
                        <strong>Phone:</strong> +94 76 123 4567
                    </p>
                    <p class="mb-1">
                    <strong>Email:</strong>
                    <a href="mailto:info@diogreenhilltop.com?subject=Booking%20Inquiry">
                        diogreenhilltop@gmail.com
                    </a>
                    </p>
                    <p class="mb-0">
                        <strong>Address:</strong> No. 43, Green Hill Road, Nuwara Eliya, Sri Lanka
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
