<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lesson\UpdateRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Lesson $lesson)
    {
        $data = $request->validated();
        $lesson->update($data);
        return redirect()->route('admin.lessons.index');
    }
}
