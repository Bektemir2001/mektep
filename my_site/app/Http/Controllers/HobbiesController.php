<?php

namespace App\Http\Controllers;
use App\Models\Hobbie;
use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){
        $dates = Hobbie::all(); 
        foreach($dates as $date){
            dump($date->programming_languages);
        }
        dd("end");
    }
    public function create(){
        $dates = [
            [
                'programming_languages' => 'C++',
                'sports' => 'wrestling',
                'books' => 'C++ for dummies',
                'place' => 'Baul'
            ],
            [
                'programming_languages' => 'C#',
                'sports' => 'Greco-Roman',
                'books' => 'C# for dummies',
                'place' => 'Djal'
            ]
            ];
        foreach($dates as $date){
            Hobbie::create($date);
        }
    }
    public function update(){
        $date = Hobbie::where('sports','judofg')->first();
        $date->update([
            'sports' => 'judo'
        ]);
        dump($date->sports);
    }
}
