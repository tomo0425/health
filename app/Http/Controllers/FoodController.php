<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use Cloudinary;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

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
    
    public function rank(Food $food)
    {
        return view('food.rank')->with(['food' => $food]);
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
    
    public function like(Food $food)
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            // ユーザーがすでに食品をいいねしていないか確認
            if (!$user->hasLiked($food)) {
                // 'user_id' の値を指定して新しいいいねを作成
                $like = new Like(['user_id' => $user->id, 'liked' => true]);
                $food->likes()->save($like);
                $user->likes()->save($like);
            } else {
                // ユーザーがすでにいいねしている場合、いいね解除ロジックを実装できます
                // いいねレコードを削除するか、'liked' を false に設定できます
            }
        }
    
        return redirect()->back();
    }

    public function unlike(Food $food)
    {
        if (Auth::check()) {
            $user = Auth::user();
            
            // ユーザーが食品をいいねしているか確認
            if ($user->hasLiked($food)) {
                // ユーザーのいいねレコードを取得
                $like = $user->likes()->where('food_id', $food->id)->first();
                
                // いいねレコードを削除するか、'liked' を false に設定します
                if ($like) {
                    $like->delete(); // または 'liked' を false に設定します
                }
            }
        }
    
        return redirect()->back();
    }
    
}
