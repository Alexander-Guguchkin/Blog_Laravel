<?php

namespace App\Http\Controllers;

use App\Models\Work;

class WorkController extends Controller
{
    public function createWork($title, $text, $images)
    {
        Work::create([
            'title'=>$title,
            'text'=>$text,
            'images'=>$images
        ]);
    }
    public function getWork()
    {
        $works = Work::all();
        foreach ($works as $work){
            dump($work->getAttributes());
        }
    }
    public function deleteWork($id){
        $this->findWork($id)->delete();
    }

    public function editWork($id, $title, $text, $images){
        $work = $this->findWork($id);
        $work->title = $title;
        $work->text = $text;
        $work->images = $images;
        $work->save();
    }
    private function findWork($id){
        $work = Work::find($id);
        return $work;
    }
}
