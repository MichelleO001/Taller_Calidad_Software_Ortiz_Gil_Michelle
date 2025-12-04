@extends('layouts.app')

@section('title', 'Editar Producto: ' . $producto->name)

@section('content')
<div class="mb-4">
    <h1>Editar Producto: {{ $producto->name }}</h1>
</div>

<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="name" class="form-label">Nombre del Producto:</label>
        <input type="text" name="name" class="form-control" 
               value="{{ old('name', $producto->name) }}" required>
    </div>

    <div class="mb-3">
        <label for="tipo_producto_id" class="form-label">Tipo de Producto:</label>
        <select name="tipo_producto_id" class="form-control" required>
            <option value="">Seleccione un tipo</option>
            @foreach ($tipos as $tipo)
                <option value="{{ $tipo->id }}" 
                    @selected(old('tipo_producto_id', $producto->tipo_producto_id) == $tipo->id)>
                    {{ $tipo->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio:</label>
        <input type="number" step="0.01" name="precio" class="form-control" 
               value="{{ old('precio', $producto->precio) }}" required>
    </div>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock:</label>
        <input type="number" name="stock" class="form-control" 
               value="{{ old('stock', $producto->stock) }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Producto</button>
    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection