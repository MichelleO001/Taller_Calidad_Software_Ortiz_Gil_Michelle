<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        // Carga la vista de login
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        return redirect()->route('productos.index')->with('success', 'Sesión iniciada correctamente.');
    }
}
