<?php

use Illuminate\Support\Facades\Route;

// Website Controller
use App\Http\Controllers\Website\{
    HomeController
};

Route::get('/', function () {
    return view('welcome');
});


Route::controller(HomeController::class)->name('website.')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about_us', 'aboutUs')->name('about.us');
});
