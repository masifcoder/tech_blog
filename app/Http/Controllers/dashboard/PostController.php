<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    

    public function index() {

        $user_id = Auth::user()->id;
       // dd($user_id);
        
        $posts = Post::where("id", $user_id)->get();

       // dd($posts);

        return view("dashboard.posts.posts");
    }
}
