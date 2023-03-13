<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function login()
    {
        return view('auth/login');
    }
    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password' ))) {
            return view('client.profile.index');
        }
    }
}
