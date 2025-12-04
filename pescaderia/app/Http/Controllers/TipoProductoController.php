<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipos = TipoProducto::all();
        return view('tipo_producto.index', compact('tipos'));
    }

    public function create()
    {
        return view('tipo_producto.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required|unique:tipo_producto|max:255']);
        
        TipoProducto::create($request->all());
        
        return redirect()->route('tipo_producto.index')->with('success', 'Tipo creado exitosamente.');
    }

    public function edit(TipoProducto $tipo_producto)
    {
        return view('tipo_producto.edit', compact('tipo_producto'));
    }

    public function update(Request $request, TipoProducto $tipo_producto)
    {
        $request->validate([
            'nombre' => 'required|unique:tipo_producto,nombre,' . $tipo_producto->id . '|max:255',
        ]);
        
        $tipo_producto->update($request->all());
        
        return redirect()->route('tipo_producto.index')->with('success', 'Tipo de producto actualizado exitosamente.');
    }

    public function destroy(TipoProducto $tipo_producto)
    {
        $tipo_producto->delete();
        return redirect()->route('tipo_producto.index')->with('success', 'Tipo de Producto eliminado exitosamente.');
    }
}