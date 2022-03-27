<?php

namespace App\Http\Controllers\Admin\Klass;

use App\Http\Controllers\Controller;
use App\Models\Klass;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Klass $klass)
    {
        return view('admin.klass.edit', compact('klass'));
    }
}
