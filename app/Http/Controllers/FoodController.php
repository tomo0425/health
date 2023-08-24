<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Cloudinary;

class FoodController extends Controller
{
    public function index(Request $request)
    {
        $searchWord = $request->input('search_word');
        $sortPrice = $request->input('sort_price');
        $filterShop = $request->input('filter_shop');
        
        $query = Food::query();
    
        if ($searchWord) {
            $query->where('name', 'LIKE', "%$searchWord%");
        }
        
        if ($sortPrice === 'id') {
            $query->orderBy('id'); 
        } elseif ($sortPrice === 'desc') {
            $query->orderByDesc('price');
        } elseif ($sortPrice === 'ask') {
            $query->orderBy('price');
        }
        
        if ($filterShop) {
            $query->where('shop', $filterShop);
        }
        
        $foods = $query->get();
        
        return view('food.index')->with(['foods' => $foods]);
    }
    
    public function show(Food $food)
    {
        return view('food.show')->with(['food' => $food]);
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
        $foods->shop = $request->foods['shop'];
        if ($request->file('image')->isValid()) {
            $path = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $foods->image = $path;
        } else {
            dd('Invalid file');
        }
        $foods->calories = $request->foods['calories'];
        $foods->proteins = $request->foods['proteins'];
        $foods->fats = $request->foods['fats'];
        $foods->carbohydrates = $request->foods['carbohydrates'];
        $foods->sugar = $request->foods['sugar'];
        $foods->fiber = $request->foods['fiber'];
        $foods->salt = $request->foods['salt'];
        $foods->save();
        return redirect('/food/index');
    }
}
