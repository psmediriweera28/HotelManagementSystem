@extends('layouts.app')

@section('title', 'Admin Rooms')

@section('content')

<style>

body{
    background: #f5f7f9;
}

.room-card{

    background: white;

    border-radius: 20px;

    padding: 25px;

    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
}

.room-title{

    color: #198754;

    font-weight: 700;

    font-size: 2rem;
}

.room-badge{

    background: #198754;

    color: white;

    padding: 8px 15px;

    border-radius: 20px;

    font-size: 14px;
}

.room-table{

    border-radius: 15px;

    overflow: hidden;
}

.room-table thead{

    background: #198754;

    color: white;
}

.room-table th{

    padding: 15px;

    text-align: center;
}

.room-table td{

    padding: 15px;

    vertical-align: middle;

    text-align: center;
}

.room-table tbody tr:hover{

    background: #f1f8f4;
}

.status-badge{

    background: #198754;

    color: white;

    padding: 6px 12px;

    border-radius: 15px;

    font-size: 12px;
}

</style>

<div class="container py-4">

    <div class="room-card">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1 class="room-title">
                Rooms Management
            </h1>

            <span class="room-badge">
                Total Rooms : {{ $rooms->count() }}
            </span>

        </div>

        <div class="table-responsive">

            <table class="table room-table table-bordered align-middle">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Room Name</th>
                        <th>Capacity</th>
                        <th>Price (LKR)</th>
                        <th>Status</th>
                    </tr>

                </thead>

                <tbody>

                @forelse($rooms as $room)

                    <tr>

                        <td>{{ $room->id }}</td>

                        <td>
                            <strong>{{ $room->name }}</strong>
                        </td>

                        <td>
                            {{ $room->capacity }} Guests
                        </td>

                        <td>
                            LKR {{ number_format($room->price, 2) }}
                        </td>

                        <td>
                            <span class="status-badge">
                                Available
                            </span>
                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5" class="text-center">
                            No rooms found.
                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection