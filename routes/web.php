<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrationController;

Route::get("/",[HomeController::class,"index"])->name("home");
Route::get("/registration", [RegistrationController::class, "index"])->name("registaration");

