<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(){
        $categories = Category::all();
        $tags = Tag::all();
        $dates = Post::all();
        return view('dates.create', compact('categories', 'tags', 'dates'));
    }
}
