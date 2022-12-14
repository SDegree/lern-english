<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function Index()
    {
        return view('signIn');
    }

    public function autenticate(Request $request)
    {
        $cardinal = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($cardinal)) {
            $request->session()->regenerate();
            return redirect()->intended();
        }

        return redirect('signIn')->with('loginErr', 'Sign is invalid');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect('/');
    }
}
