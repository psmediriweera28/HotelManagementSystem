{{-- resources/views/user/food-menus.blade.php --}}

@extends('layouts.dashboard')

@section('content')



<div class="container py-4">
    <h1 class="mb-4 fs-4 fw-semibold"  style="color:green;">Food Menu</h1>

    <div class="row">
        @foreach($foods as $food)
        <div class="col-md-4 mb-3">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">{{ $food->name }}</h5>
                    <p class="card-text text-muted">{{ $food->description }}</p>
                    <p class="fw-bold mb-3">Price: {{ $food->price }}</p>

                    <form action="{{ route('user.food-orders.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="food_menu_id" value="{{ $food->id }}">

                        <div class="mb-2">
                            <label for="quantity-{{ $food->id }}" class="form-label">Quantity</label>
                            <input
                                type="number"
                                name="quantity"
                                id="quantity-{{ $food->id }}"
                                class="form-control form-control-sm"
                                value="1"
                                min="1"
                                required
                            >
                        </div>

                        <button type="submit" class="btn btn-success btn-sm w-100">
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


