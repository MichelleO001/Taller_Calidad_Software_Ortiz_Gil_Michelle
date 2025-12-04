@extends('layouts.app')

@section('title', 'Crear Tipo de Producto')

@section('content')
<div class="mb-4">
    <h1>Crear Nuevo Tipo de Producto</h1>
</div>

<form action="{{ route('tipo_producto.store') }}" method="POST">
    @csrf
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Tipo:</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
    </div>

    <button type="submit" class="btn btn-success">Guardar Tipo</button>
    <a href="{{ route('tipo_producto.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection