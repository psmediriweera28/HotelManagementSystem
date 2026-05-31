{{-- resources/views/admin/food-orders/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Food Orders | My Hotel')

@section('content')

<style>
/* Admin Food Orders Table */

body{
    background: linear-gradient(to right, #021b12, #0b3d2e);
}

/* Title */
.h1-tag{
    font-size: 30px;
    color: #22c55e;
    font-family: 'Playfair Display', serif;
    font-weight: bold;
    padding: 20px;
    margin-bottom: 8px;
}

/* Wrapper */
.orders-wrapper{
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.35);
    margin-left: 10px;
    
    margin-top: 0px;
}

/* Table */
.orders-table{
    color: white;
    margin-bottom: 0;
}

.orders-table thead{
    background: rgba(34,197,94,0.15);
}

.orders-table thead th{
    color: #22c55e;
    border-color: rgba(255,255,255,0.1);
    font-weight: bold;
}

.orders-table td{
    border-color: rgba(255,255,255,0.08);
    vertical-align: middle;
}

.orders-table tbody tr:hover{
    background: rgba(255,255,255,0.05);
}

/* Food Badge */
.badge-food{
    background: rgba(34,197,94,0.2);
    color: #22c55e;
    padding: 6px 12px;
    border-radius: 30px;
    font-weight: 600;
}

/* Price */
.price{
    color: #22c55e;
    font-weight: bold;
}

/* Date */
.order-date{
    color: rgba(255,255,255,0.7);
}


</style>

<h1 class="h1-tag">Food Orders</h1>

<div class="orders-wrapper">

<table class="table orders-table align-middle">

    <thead>
        <tr>
            <th width="70">#</th>
            <th width="180">User</th>
            <th width="200">Food</th>
            <th width="100">Qty</th>
            <th width="150">Total</th>
            <th>Created At</th>
        </tr>
    </thead>

    <tbody>

        @foreach($orders as $order)

        <tr>

            <td>{{ $order->id }}</td>

            <td>{{ $order->user->name ?? '-' }}</td>

            <td>
                <span class="badge-food">
                    {{ $order->foodMenu->name ?? '-' }}
                </span>
            </td>

            <td>{{ $order->quantity }}</td>

            <td class="price">
                Rs. {{ number_format($order->total_price, 2) }}
            </td>

            <td class="order-date">
                {{ $order->created_at->format('Y-m-d H:i') }}
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

</div>
@endsection
