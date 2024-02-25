<?php

namespace App\Http\Controllers;

use App\Models\Post;

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
    public function deletePost($id){
        $this.findPost($id)->delete();
    }

    public function editPost($id, $title, $text, $images){
        $post = $this->findPost($id);
        $post->title = $title;
        $post->text = $text;
        $post->images = $images;
        $post->save();
    }
    private function findPost($id){
        $post = Post::find($id);
        return $post;
    }
}
