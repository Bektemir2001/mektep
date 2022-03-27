<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class RestorController extends Controller
{
    public function __invoke($name){
        $deleted_date = Post::onlyTrashed()->where('name', $name);
        $deleted_date->restore();
        return redirect()->route('dates');
    }
}
