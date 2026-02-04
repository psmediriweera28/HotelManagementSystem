<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvailabilityController extends Controller
{

    public function check(Request $request){
        $data = $request->validate([
        'check_in' => ['required', 'data'],
        'check_out' => ['required', 'data', 'after:check_in'],
        'rooms' => ['required', 'integer', 'min:1'],
        'guests' => ['required', 'integer', 'min:1'],

    ]);

    return back()->with('success', 'Form submitted! (availability check comming next)');
    }
    
}
