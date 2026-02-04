<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodMenu;
use Illuminate\Http\Request;

class FoodMenuAdminController extends Controller
{
    public function index()
    {
        $menus = FoodMenu::latest()->get();

        return view('admin.food-menus.index', compact('menus'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'price'       => ['required', 'numeric', 'min:0'],
        ]);

        FoodMenu::create($data);

        return back()->with('success', 'Food menu item added.');
    }
}
