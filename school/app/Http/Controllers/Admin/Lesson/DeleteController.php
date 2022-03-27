<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('admin.lessons.index');
    }
}
