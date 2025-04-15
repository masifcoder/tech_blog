<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    

    public function loginForm() {

        return view("auth.login");
    }


    public function login(Request $request) {

        dd($request->all());
    }

    public function signupForm() {

        return view("auth.signup");
    }


    public function register(Request $request) {

        dd($request->all());
    }
}
