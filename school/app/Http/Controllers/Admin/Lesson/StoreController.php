<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Lesson\StoreRequest;
use App\Models\Lesson;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $lesson = Lesson::create($data);

        return $lesson;
    }
}
