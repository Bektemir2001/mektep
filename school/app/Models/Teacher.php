<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $guarded = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function lesson(){
        return $this->belongsTo(Lesson::class, 'lesson_id', 'id');
    }
}
