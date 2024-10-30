<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//    return view('index');
// });

Route::get('/welcome', function () {
   return view('welcome');
});

// Route::get('/about', function () {
//    return "Tentang Gue";
// });

Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/about', [HomeController::class, "about"])->name('about');