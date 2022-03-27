<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

use Illuminate\Http\Request;

class UpdateDatesController extends Controller
{
   
    public function __invoke($id){
        $person = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        $dates = Post::all();
        return view('dates.update', compact('id', 'person', 'categories', 'tags', 'dates'));
    }
}
