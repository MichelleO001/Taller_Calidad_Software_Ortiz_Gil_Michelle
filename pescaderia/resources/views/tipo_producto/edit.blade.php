@extends('layouts.app')

@section('title', 'Editar Tipo: ' . $tipo->nombre)

@section('content')
<div class="mb-4">
    <h1>Editar Tipo de Producto: {{ $tipo->nombre }}</h1>
</div>

<form action="{{ route('tipo_producto.update', $tipo->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Tipo:</label>
        <input type="text" 
               name="nombre" 
               class="form-control" 
               value="{{ old('nombre', $tipo->nombre) }}" 
               required>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Tipo</button>
    <a href="{{ route('tipo_producto.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection