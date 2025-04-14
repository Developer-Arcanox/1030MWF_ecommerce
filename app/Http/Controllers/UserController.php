<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
