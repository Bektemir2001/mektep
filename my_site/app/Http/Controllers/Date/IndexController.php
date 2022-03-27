<?php

namespace App\Http\Controllers\Date;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Date\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function __invoke(){
        $dates = Post::paginate(5);
        $id_for_date = 0;
        return view("dates.date", compact('dates', 'id_for_date'));
    }
}
