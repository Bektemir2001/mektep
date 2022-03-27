<?php

namespace App\Http\Controllers\Admin\Klass;

use App\Http\Controllers\Controller;
use App\Models\Klass;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Klass $klass)
    {
        $klass->delete();

        return redirect()->route('admin.klasses.index');
    }
}
