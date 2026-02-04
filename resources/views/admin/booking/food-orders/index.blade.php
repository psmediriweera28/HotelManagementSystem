{{-- resources/views/admin/food-orders/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Food Orders | My Hotel')

@section('content')

<style>
/* Admin Food Orders Table */

.h1-tag{
    margin: 1rem;
    font-size: 2rem;
    color: green;
}
.table {
    border-radius: 10px;
    overflow: hidden;
    background-color: #fff;
    margin-left: 3rem;
}

.table thead {
    background: linear-gradient(135deg, #06980d, #457b9d);
}

.table thead th {
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.85rem;
    border: none;
}

.table tbody tr {
    transition: all 0.2s ease-in-out;
}

.table tbody tr:hover {
    background-color: #f1f7ff;
}

.table td,
.table th {
    padding: 12px 14px;
    vertical-align: middle;
}

.table td {
    font-size: 0.9rem;
}

.badge-food {
    background-color: #198754;
    color: #fff;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
}

.price {
    font-weight: bold;
    color: #084627;
}

</style>

<h1 class="h1-tag">Food Orders</h1>

<table class="table table-striped table-hover table-bordered align-middle shadow-sm">
    <thead>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Food</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Created at</th>
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

            <td class="price">Rs. {{ number_format($order->total_price, 2) }}</td>
            <td>{{ $order->created_at->format('Y-m-d H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
