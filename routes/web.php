<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;

Route::get("/",[HomeController::class,"index"])->name("home");
Route::resource("registration", RegistrationController::class)->only(['index', 'store']);
Route::get("/login", [LoginController::class, "index"])->name("login");
Route::post('/login', [LoginController::class,'login'])->name('login');

Route::middleware('auth')->group(function(){
    Route::resource("/profile",  ProfileController::class)->only(['index', 'update']);
    Route::resource("/blog", BlogController::class);
    Route::resource("/news",NewsController::class);
});


