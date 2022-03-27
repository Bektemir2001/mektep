<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke()
    {
        $posts = [
            [
                "name" => "Bektemir",
                "age" => 21
            ],
            [
                "name" => "Symbat",
                "age" => 21
            ],
            [
                "name" => "Men",
                "age" => 21
            ],
            [
                "name" => "Sen",
                "age" => 21
            ]
        ];
        return $posts;
    }
}
