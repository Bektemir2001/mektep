<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Teacher $teacher)
    {
        $user_id = $teacher['user_id'];
        $user = User::find($user_id);
        $teacher->delete();
        $user->delete();

        return redirect()->route('admin.teachers.index');
    }
}
