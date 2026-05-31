@extends('layouts.dashboard')

@section('content')

<style>

body{

    background: linear-gradient(to right, #021b12, #0b3d2e);
}

/* PAGE TITLE */

.food-title{

    color:#22c55e;

    font-size:30px;

    font-family: 'Playfair Display', serif;

    font-weight:bold;

    margin-bottom:30px;
}

/* FOOD CARD */

.food-card{

    background: rgba(255,255,255,0.08);

    backdrop-filter: blur(12px);

    border-radius: 25px;

    overflow: hidden;

    transition: 0.4s ease;

    box-shadow: 0 12px 30px rgba(0,0,0,0.35);

    height: 100%;

    margin-top: -15px;
}

.food-card:hover{

    transform: translateY(-8px);

    box-shadow: 0 18px 40px rgba(0,0,0,0.5);
}

/* FOOD IMAGE */

.food-image{

    width: 100%;

    height: 180px;

    object-fit: cover;
}

/* FOOD CONTENT */

.food-content{

    padding: 18px;
}

.food-name{

    color: white;

    font-size: 20px;

    font-weight: bold;

    margin-bottom: 12px;
}

.food-description{

    color: rgba(255,255,255,0.75);

    font-size: 15px;

    line-height: 1.7;

    margin-bottom: 18px;
}

.food-price{

    color: #22c55e;

    font-size: 22px;

    font-weight: bold;

    margin-bottom: 20px;
}

/* INPUT */

.quantity-input{

    background: rgba(255,255,255,0.12);

    border: 1px solid rgba(255,255,255,0.2);

    color: white;

    border-radius: 12px;

    padding: 10px;
}

.quantity-input:focus{

    border: 1px solid #22c55e;

    box-shadow: 0 0 10px rgba(34,197,94,0.5);
}

/* BUTTON */

.order-btn{

    background: #22c55e;

    border: none;

    border-radius: 12px;

    padding: 12px;

    font-weight: bold;

    transition: 0.3s ease;
}

.order-btn:hover{

    background: #16a34a;

    transform: translateY(-3px);
}

.quantity-label{

    color: white;

    margin-bottom: 8px;
}

</style>

<div class="container py-2">

<h1 class="food-title">

    Food Menu

</h1>

<div class="row g-4">

    @foreach($foods as $food)

    <div class="col-lg-3 col-md-6">

        <div class="food-card">

            <!-- FOOD IMAGE -->
<!-- FOOD IMAGE -->

            @if($food->image)

                <img
                src="{{ asset('storage/'.$food->image) }}"
                alt="{{ $food->name }}"
                class="food-image">

            @else

                <img
                src="{{ asset('images/no-food.jpg') }}"
                alt="No Image"
                class="food-image">

            @endif

            <!-- FOOD CONTENT -->

            <div class="food-content">

                <h2 class="food-name">

                    {{ $food->name }}

                </h2>

                <p class="food-description">

                    {{ $food->description }}

                </p>

                <h3 class="food-price">

                    LKR {{ number_format($food->price, 2) }}

                </h3>

                <!-- FORM -->

                <form action="{{ route('user.food-orders.store') }}"
                method="POST">

                    @csrf

                    <input type="hidden"
                    name="food_menu_id"

                    value="{{ $food->id }}">

                    <div class="mb-3">

                        <label
                        for="quantity-{{ $food->id }}"

                        class="quantity-label">

                            Quantity

                        </label>

                        <input
                        type="number"

                        name="quantity"

                        id="quantity-{{ $food->id }}"

                        class="form-control quantity-input"

                        value="1"

                        min="1"

                        required>

                    </div>

                    <button
                    type="submit"

                    class="btn order-btn w-100">

                        Place Your Order

                    </button>

                </form>

            </div>

        </div>

    </div>

    @endforeach

</div>


</div>

@endsection
