<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    

    protected $fillable = ['title', 'content', 'photo_path', 'excerpt', 'user_id', 'category_id'];


    // One to One relation
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    // get comments
    public function comments() {

        return $this->hasMany(Comment::class);
    }
}
