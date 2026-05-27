<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
{
    $user = \App\Models\User::where('email', $request->email)->first();

    if ($user) {

        // LOGIN MANUAL ADMIN
        if (
            $user->email == 'admin@gmail.com' &&
            $request->password == 'password'
        ) {

            Auth::login($user);

            return redirect('/admin');
        }

        // LOGIN MANUAL USER
        if (
            $user->email == 'user@gmail.com' &&
            $request->password == 'password'
        ) {

            Auth::login($user);

            return redirect('/perfil');
        }

        // LOGIN MANUAL OMAR
        if (
            $user->email == 'omarqm@gmail.com' &&
            $request->password == 'Omar411*'
        ) {

            Auth::login($user);

            return redirect('/perfil');
        }

    }

    return back()->with('error', 'Datos incorrectos');
}

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}