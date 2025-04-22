<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    


    public function index() {

        $posts = Post::all();

        return view("blog.index", ['posts' => $posts]);
    }

    public function single($id) {

        $post = Post::findOrFail($id);

        //dd($post->user->name);

        return view("blog.single",  ['post' => $post]);
    }
}
