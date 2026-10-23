<?php

namespace App\Http\Controllers;

use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::orderBy('name')->get();

        return view('dishes.index', compact('dishes'));
    }

    public function show(Dish $dish)
    {
        return view('dishes.show', compact('dish'));
    }
}
