<?php

namespace App\Http\Controllers\Date;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DeletedDatesController extends Controller
{
    public function __invoke(){
        $dates = Post::all();
        $deleted_dates = Post::onlyTrashed()->get();
        if(count($deleted_dates) == 0){
            return "<h1>Not deleted date</h1";
        }
        return view('dates.deleted_dates', compact('deleted_dates', 'dates'));
    }
}
