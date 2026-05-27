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
    $credenciales = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($credenciales)) {

        $request->session()->regenerate();

        // SI ES ADMIN
        if (Auth::user() && Auth::user()->role == 'admin') {

            return redirect('/admin');

        }

        // SI ES USER
        return redirect('/perfil');
    }

    return back()->with('error', 'Datos incorrectos');
}

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}