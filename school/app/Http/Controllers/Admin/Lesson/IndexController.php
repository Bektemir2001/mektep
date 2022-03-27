<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::all();
        return $lessons;
    }
}
