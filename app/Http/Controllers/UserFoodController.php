<?php

namespace App\Http\Controllers;


use App\Models\FoodMenu;
use App\Models\FoodOrder;
use Illuminate\Http\Request;

class UserFoodController extends Controller
{
    public function index()
    {
        $foods = FoodMenu::all();
        // $orders = auth()->user()->foodOrders()->with('foodMenu')->latest()->get();

        return view('user.food-menus', compact('foods'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'food_menu_id' => ['required', 'exists:food_menus,id'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $food = FoodMenu::findOrFail($data['food_menu_id']);

        FoodOrder::create([
            'user_id' => auth()->id(),
            'food_menu_id' => $food->id,
            'quantity' => $data['quantity'],
            'total_price' => $food->price * $data['quantity'],
            'status' => 'pending'
        ]);

        return back()->with('success', 'Food order placed successfully...');
    }
}
