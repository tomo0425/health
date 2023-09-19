<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cloudinary;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $id = Auth::id();
        $posts = Post::all(); 
        return view('posts.index')->with(['posts' => $posts]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    
    public function store(Request $request, Post $post)
    {
        $post = new Post();
        $post->user_id = auth()->id();
        $post->food_id = NULL;
        if($request->file('image')){
            $path = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $post->image = $path;
        }
        $post->title = $request->post['title'];
        $post->text = $request->post['text'];
        $post->save();
        return redirect('/posts/index');
    }
}
