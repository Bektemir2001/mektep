<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke($id){
        $date = Post::find($id);
        $date->delete();
        return redirect()->route('dates');
    }
}
