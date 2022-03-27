<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BaseController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('dates.base.base', compact('posts'));
    }
}
