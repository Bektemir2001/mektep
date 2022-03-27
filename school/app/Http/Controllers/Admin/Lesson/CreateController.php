<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin.lesson.create');
    }
}
