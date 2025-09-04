<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("home");


Route::get('/contact',[HomeController::class,'index'])->name('contact');
Route::post('/contact/store',[HomeController::class,'store'])->name('contact.store');
Route::get('/team',[HomeController::class,'team'])->name('team');
Route::get('/about-us',[CommonController::class,'about'])->name('about');
Route::get('/portfolio',[CommonController::class,'portfolio'])->name('portfolio');
Route::get('/services',[CommonController::class,'service'])->name('service');
