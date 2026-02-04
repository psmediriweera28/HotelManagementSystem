@extends('layouts.admin')

@section('title', 'User Feedbacks')

@section('content')

<style>
    .h1-class{
        font-size: 30px;
        color: green;

    }

    
</style>
<div class="container py-4 px-4 ">
    <h1 class="h1-class mb-4 ml-5">User Feedbacks</h1>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table mb-0 ml-5 table-striped align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Submitted at</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($feedbacks as $feedback)
                    <tr>
                        <td>{{ $feedback->id }}</td>
                        <td>{{ $feedback->user->name ?? 'Guest' }}</td>
                        <td>{{ $feedback->subject ?? '-' }}</td>
                        <td>{{ $feedback->message }}</td>
                        <td>{{ $feedback->created_at }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-3">No feedbacks yet.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
