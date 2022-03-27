<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        $lessons = Lesson::all();
        return view('admin.teacher.edit', compact('teacher', 'lessons'));
    }
}
