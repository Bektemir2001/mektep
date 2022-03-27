<?php

namespace App\Http\Controllers\Admin\Klass;

use App\Http\Controllers\Controller;
use App\Models\Klass;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $klasses = Klass::all();
        return view('admin.klass.index', compact('klasses'));
    }
}
