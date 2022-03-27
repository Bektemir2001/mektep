<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        return view('admin.teacher.show', compact('teacher'));
    }
}
