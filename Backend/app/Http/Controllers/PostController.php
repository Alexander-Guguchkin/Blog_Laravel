<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost($title, $text, $images)
    {
        Post::create([
            'title'=>$title,
            'text'=>$text,
            'images'=>$images
        ]);
    }
    public function getPost()
    {
        $posts = Post::all();
        foreach ($posts as $post){
            dump($post->getAttributes());
        }
    }
}
