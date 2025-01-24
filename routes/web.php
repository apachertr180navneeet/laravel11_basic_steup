<?php

use Illuminate\Support\Facades\Route;

// Website Controller
use App\Http\Controllers\Website\{
    HomeController
};

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('website.home');
