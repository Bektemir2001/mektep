<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\UpdateRequest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Teacher $teacher)
    {
        $data = $request->validated();
        $user = [
            'name' => $data['name'],
            'surename' => $data['surename'],
            'role' => 1,
            'email'=>$data['email'],
        ];

        $lesson_id = $data['lesson_id'];
        unset($data);
        $user = $teacher->user()->update($user);
        $data = [
            'lesson_id' => $lesson_id,
        ];
        $teacher->update($data);
        return redirect()->route('admin.teachers.index');
    }
}
