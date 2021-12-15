<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
class PostController extends Controller
{
    public function getcommenstbypost(){
        $post= Post::find(1);
         return $post->comments->comment;
    }
    public function getpostbycomment()
    {
        return Comment::find(1)->post->title;
    }
}