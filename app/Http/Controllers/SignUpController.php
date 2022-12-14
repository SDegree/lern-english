<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index()
    {
        return view('signUp');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        if ($validateData['password'] !== $request['coffPswd']) {
            return redirect('signUp')->with('signUpErr', 'Password tidak sama');
        }
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        return redirect('signIn')->with('signUpSucc', 'Berhasil mendaftar, silahkan login.');
    }
}
