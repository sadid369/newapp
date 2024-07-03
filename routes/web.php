<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Route::get('/home',HomeController::class);
Route::get('about', [AboutController::class,'index']);
Route::get('contact', [ContactController::class,'index']);

Route::resource('blog',BlogController::class);