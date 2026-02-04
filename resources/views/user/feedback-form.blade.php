@extends('layouts.dashboard')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 fs-3" style="color: green;">Give Your Feedback</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('user.feedbacks.store') }}" method="POST" class="card p-3 shadow-sm">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="subject" class="form-control"
                   value="{{ old('subject') }}">
            @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" rows="4" class="form-control" required>{{ old('message') }}</textarea>
            @error('message') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">
            Submit Feedback
        </button>
    </form>
</div>
@endsection
