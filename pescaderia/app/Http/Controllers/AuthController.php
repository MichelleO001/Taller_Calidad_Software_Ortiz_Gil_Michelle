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
        // Validación básica (puedes añadir más si usas la DB)
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 🌟 LÓGICA DE SIMULACIÓN SIMPLE 🌟
        // Aquí debes implementar la lógica real de autenticación.
        // Por ahora, solo redirigiremos al CRUD si se envía algo.
        
        // Si la autenticación es exitosa (simulación):
        // Puedes redirigir a la página principal del CRUD (productos.index)
        return redirect()->route('productos.index')->with('success', 'Sesión iniciada correctamente.');

        // Si usas el sistema de Auth de Laravel (ejemplo comentado):
        /*
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('productos.index'));
        }

        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('email');
        */
    }
}