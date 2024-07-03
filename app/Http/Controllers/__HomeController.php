<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
   public function index()
    {
        $blogs = [
            [
                "title" => "Tile One",
                "body" => "This is a body text",
                "status" => 1
            ],
            [
                "title" => "Tile two",
                "body" => "This is a body text",
                "status" => 0
            ],
            [
                "title" => "Tile Three",
                "body" => "This is a body text",
                "status" => 1
            ],
            [
                "title" => "Tile Four",
                "body" => "This is a body text",
                "status" => 10
            ],
            [
                "title" => "Tile Five",
                "body" => "This is a body text",
                "status" => 15
            ],
            [
                "title" => "Tile Six",
                "body" => "This is a body text",
                "status" => 1
            ]
        ];
        return view('home', ['blogs' => $blogs]);
    }
}
