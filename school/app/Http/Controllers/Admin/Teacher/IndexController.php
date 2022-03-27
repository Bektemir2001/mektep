<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index', compact('teachers'));
    }
}
