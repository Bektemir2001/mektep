<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleterController extends Controller
{
    public function __invoke(){
        $dates = Post::paginate(8);
        return view('dates.delete', compact('dates'));
    }
}
