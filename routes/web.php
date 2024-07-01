<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('home', function () {
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
});
