<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


Route::get('/contact',[HomeController::class,'index'])->name('contact');
Route::post('/contact/store',[HomeController::class,'store'])->name('contact.store');
Route::get('/team',[HomeController::class,'team'])->name('team');