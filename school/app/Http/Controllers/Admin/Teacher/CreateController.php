<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $lessons = Lesson::all();
        return view('admin.teacher.create', compact('lessons'));
    }
}
