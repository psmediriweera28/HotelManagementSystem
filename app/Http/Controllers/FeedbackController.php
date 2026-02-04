<?php

namespace App\Http\Controllers;


use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('user.feedback-form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Feedback::create([
            'user_id' => auth()->id(),
            'subject' => $data['subject'] ?? null,
            'message' => $data['message'],
        ]);

        return back()->with('success', 'Thank you for your feedback!');
    }
}
