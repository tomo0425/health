<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Cloudinary;

class FoodController extends Controller
{
    public function index(Food $food)
    {
        $foods = Food::all();
        return view('food.index')->with(['foods' => $foods]);
    }
    
    public function create()
    {
        $foods = Food::all();
        return view('food.create')->with(['foods' => $foods]);
    }
    
    public function store(Request $request)
    {
        $foods = new Food();
        $foods->name = $request->foods['name'];
        $foods->price = $request->foods['price'];
        if ($request->file('image')->isValid()) {
            $path = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $foods->image = $path;
        } else {
            dd('Invalid file');
        }
        $foods->save();
        return redirect('/food/index');
    }
}
