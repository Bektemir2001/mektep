<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joktomo extends Model
{
    use HasFactory;
    protected $table = 'joktomos';
    protected $guarded = false;
}
