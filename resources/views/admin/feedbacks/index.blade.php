@extends('layouts.admin')

@section('title', 'User Feedbacks')

@section('content')

<style>

body{
    background: linear-gradient(to right, #021b12, #0b3d2e);
}

/* Page Title */
.h1-class{
    font-size: 32px;
    color: #22c55e;
    font-family: 'Playfair Display', serif;
    font-weight: bold;
    margin-bottom: 10px;
    margin-left: 30px;
}

.feedback-count{
    color: rgba(255,255,255,0.75);
    font-size: 16px;
    margin-bottom: 20px;
    margin-left: 30px;
}

/* Wrapper */
.feedback-wrapper{
    background: rgba(255,255,255,0.08);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 20px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.35);
    margin: 30px;
}

/* Table */
.feedback-table{
    width: 100%;
    border-collapse: collapse;
    color: white;
}

.feedback-table thead{
    background: rgba(34,197,94,0.15);
}

.feedback-table thead th{
    color: #22c55e;
    font-size: 16px;
    font-weight: 700;
    padding: 15px;
    text-align: left;
}

.feedback-table tbody td{
    padding: 15px;
    border-top: 1px solid rgba(255,255,255,0.08);
    color: rgba(255,255,255,0.9);
}

.feedback-table tbody tr{
    transition: 0.3s ease;
}

.feedback-table tbody tr:hover{
    background: rgba(255,255,255,0.05);
}

/* User Badge */
.user-badge{
    background: rgba(34,197,94,0.15);
    color: #22c55e;
    padding: 8px 14px;
    border-radius: 30px;
    font-weight: 600;
    display: inline-block;
}

/* Message */
.feedback-message{
    max-width: 400px;
    word-wrap: break-word;
    line-height: 1.6;
}

/* Date */
.feedback-date{
    color: rgba(255,255,255,0.65);
    white-space: nowrap;
}

/* Empty */
.empty-row{
    color: rgba(255,255,255,0.7);
    text-align: center;
}

/* Responsive */
@media(max-width:768px){

    .feedback-wrapper{
        overflow-x:auto;
    }

    .feedback-table{
        min-width:800px;
    }
}

</style>

<div class="container py-2">

    <h1 class="h1-class">User Feedbacks</h1>

    <p class="feedback-count">
        Total Feedbacks: {{ $feedbacks->count() }}
    </p>

    <div class="feedback-wrapper">

        <table class="feedback-table">

            <thead>
                <tr>
                    <th style="width:70px;">#</th>
                    <th style="width:180px;">User</th>
                    <th style="width:220px;">Name</th>
                    <th>Message</th>
                    <th style="width:180px;">Submitted At</th>
                </tr>
            </thead>

            <tbody>

                @forelse($feedbacks as $feedback)

                <tr>

                    <td>{{ $feedback->id }}</td>

                    <td>
                        <span class="user-badge">
                            {{ $feedback->user->name ?? 'Guest' }}
                        </span>
                    </td>

                    <td>
                        {{ $feedback->subject ?? '-' }}
                    </td>

                    <td class="feedback-message">
                        {{ $feedback->message }}
                    </td>

                    <td class="feedback-date">
                        {{ $feedback->created_at->format('Y-m-d H:i') }}
                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" class="empty-row py-4">
                        No feedbacks yet.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection