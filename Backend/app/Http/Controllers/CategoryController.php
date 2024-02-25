<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function getCategory(){
        $categories = Category::all();
        foreach ($categories as $category){
            dump($categories->getAttributes());
        }
    }
    public function addCategory($CategoryName){
        Category::create([
            'CategoryName' => $CategoryName
        ]);
    }
    public function deleteCategory($id){
        $this.findCategory($id)->delete();
    }
    private function findCategory($id){
        $category = Category::find($id);
        return $category;
    }
}
