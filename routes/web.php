<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/registration", [RegistrationController::class, "index"])->name("registaration");
Route::get("/login", [LoginController::class, "index"])->name("login");

