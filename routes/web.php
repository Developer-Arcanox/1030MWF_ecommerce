<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', "index")->name("landing.page");
    Route::get("/register", "showRegisterForm")->name("register.page");
    Route::post("/register", "register")->name("register");
    Route::get("/login", "showLoginForm")->name("login.page");
    Route::post('/login', "login")->name("login");
    Route::middleware(UserAuth::class)->group(function () {
        Route::get("/user/dashboard", "userDashboard")->name("user.dashboard");
    });
    Route::middleware(AdminAuth::class)->group(function () {
        Route::get("/admin/dashboard", "adminDashboard")->name("admin.dashboard");
    });
    Route::get("/unauthorised-access", "access_denied")->name("permission.denied");
});
