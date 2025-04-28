<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    

    public function store(Request $request) {

        $request->validate([
            'comment' => ['required', 'string']
        ]);

        $user_id = Auth::user()->id;
        $post_id = $request->input('post_id');
        $comment = $request->input('comment');

        // filter comment
        if($this->filterComment($comment) === true) {
            return back()->with('error', "Don't use abusive words");
        }
        

        // creating comment
        Comment::create([
            'user_id' => $user_id,
            'post_id' => $post_id,
            'comment' => $comment
        ]);

        return back()->with('success', 'Comment created successfully!');

    }


    // helper function to filter commnet
    protected function filterComment($text) {
        return str_contains($text, ' hi ');
    }
}
