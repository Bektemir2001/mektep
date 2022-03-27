<?php

namespace App\Http\Controllers\Admin\Klass;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Klass\StoreRequest;
use App\Models\Klass;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Klass::create($data);

        return redirect()->route('admin.klasses.index');
    }
}
