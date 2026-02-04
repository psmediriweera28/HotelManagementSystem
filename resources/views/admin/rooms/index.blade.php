@extends('layouts.app')

@section('title', 'Admin Rooms')

@section('content')
<div class="container py-4">
    <h1 class="mb-3" style="color: green;">Rooms</h1>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Capacity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        @forelse($rooms as $room)
            <tr>
                <td>{{ $room->id }}</td>
                <td>{{ $room->name }}</td>
                <td>{{ $room->capacity }}</td>
                <td>{{ $room->price }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center">No rooms found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
