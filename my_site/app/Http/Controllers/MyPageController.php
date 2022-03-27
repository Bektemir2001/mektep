<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
class MyPageController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function insert(){
        $newdate = [
            [
                'name' => 'Bektemir',
                'last_name'=> 'Kumarbay_uulu',
                'age' => 21,
                'content' => 'temporarily empty'
            ],
            [
                'name' => 'Bektursun',
                'last_name'=> 'Kabylov',
                'age' => 21,
                'content' => 'temporarily empty'
            ],
            [
                'name' => 'Erlan',
                'last_name'=> 'Karimov',
                'age' => 21,
                'content' => 'temporarily empty'
            ]
        ];
        foreach($newdate as $date){
            Post::create($date);
        }
        dd('Created');
    }
}
