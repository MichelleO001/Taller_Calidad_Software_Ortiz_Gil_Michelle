<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipos = TipoProducto::all();
        // La vista usa la carpeta 'tipo_producto' (snake_case)
        return view('tipo_producto.index', compact('tipos'));
    }

    // 🌟 CORRECCIÓN 2: Asegurar que el método 'create' exista y sea público
    public function create()
    {
        return view('tipo_producto.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required|unique:tipo_producto|max:255']);
        
        TipoProducto::create($request->all());
        
        // 🌟 CORRECCIÓN 1: Ruta en minúsculas
        return redirect()->route('tipo_producto.index')->with('success', 'Tipo creado exitosamente.');
    }

    // ... (El resto de los métodos como edit, update, destroy también deben usar 'tipo_producto.index' para redireccionar)
    // ...
}