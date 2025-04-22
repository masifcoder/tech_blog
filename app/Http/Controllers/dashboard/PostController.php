<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    

    public function index() {


        $posts = Auth::user()->posts;

     //   dd($posts);


    //     $user_id = Auth::user()->id;
    //    // dd($user_id);
        
    //     $posts = Post::where("user_id", $user_id)->get();

        //dd($posts);

        return view("dashboard.posts.posts", ['posts' => $posts]);
    }

    public function create() {

        return view("dashboard.posts.create");
    }

    public function store(Request $request) {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'excerpt' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // post create
         // upload image
         $path = $request->file('image')->store("uploads", "public");

          // store data into db
        Post::create([
            'title' => $request->input('title'),
            'excerpt' => $request->input('excerpt'),
            'content' => $request->input('content'),
            'photo_path' => $path,
            "user_id" => Auth::user()->id,
            'category_id' => 1
        ]);


        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }
}

