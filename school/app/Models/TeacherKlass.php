<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherKlass extends Model
{
    use HasFactory;
    protected $table = 'teacher_klasses';
    protected $guarded = false;
}
