<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', "index")->name("landing.page");
    Route::get("/login", "showLoginForm")->name("login.page");
    Route::get("/register", "showRegisterForm")->name("register.page");
    Route::post("/register", "register")->name("register");
});
