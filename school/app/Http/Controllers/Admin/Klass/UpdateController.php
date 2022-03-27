<?php

namespace App\Http\Controllers\Admin\Klass;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Klass\UpdateRequest;
use App\Models\Klass;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Klass $klass)
    {
        $data = $request->validated();
        $klass->update($data);
        return redirect()->route('admin.klasses.index');
    }
}
