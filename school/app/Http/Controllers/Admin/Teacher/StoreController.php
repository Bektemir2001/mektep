<?php

namespace App\Http\Controllers\Admin\Teacher;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Teacher\StoreRequest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $password = Str::random(8);
        $password = Hash::make($password);
        $user = [
            'name' => $data['name'],
            'surename' => $data['surename'],
            'role' => 1,
            'email'=>$data['email'],
            'password' => $password
        ];
        $lesson_id = $data['lesson_id'];
        unset($data);
        $user = User::firstOrCreate($user);
        $data = [
            'user_id' => $user->id,
            'lesson_id' => $lesson_id,
        ];
        Teacher::create($data);

        return redirect()->route('admin.teachers.index');
    }
}
