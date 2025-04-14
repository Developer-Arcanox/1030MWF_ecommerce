<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function index()
    {
        return view("welcome");
    }

    function showLoginForm()
    {
        return view("login");
    }

    function showRegisterForm()
    {
        return view("register");
    }

    function register(Request $request)
    {
        User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => Hash::make($request->password),
            "phone" => $request->phone,
        ]);

        return redirect("/login")->with("success", "Account created successfully");
    }
}
