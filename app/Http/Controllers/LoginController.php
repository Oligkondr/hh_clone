<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        return view('register');
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function registerCreate(Request $request)
    {
        User::create($request->only(['email', 'password', 'name']));
        return redirect('login');
    }

    public function authentication(Request $request)
    {
        $arr = $request->only(['email', 'password']);
        Auth::attempt($arr);
        return redirect('home');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('home');
    }
}
