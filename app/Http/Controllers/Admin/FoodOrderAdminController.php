<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FoodOrder;

class FoodOrderAdminController extends Controller
{
    public function index()
    {
        $orders = FoodOrder::with(['user','foodMenu'])->latest()->get();

        return view('admin.booking.food-orders.index', compact('orders'));
    }

}
