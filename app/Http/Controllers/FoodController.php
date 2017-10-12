<?php

namespace App\Http\Controllers;
use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function index($category)
    {
        return Food::all();
    }

    public function show(Food $food,$category)
    {
        return $food;
    }

    public function store(Request $request,$category)
    {
        $food = Food::create($request->all());

        return response()->json($food);
    }

    public function update(Request $request,$category, Food $food)
    {
        $food->update($request->all());

        return response()->json($food);
    }

    public function delete($category,Food $food,)
    {
        $food->delete();

        return response()->json(null, 204);
    }
}
