@extends('layouts.app')

@section('content')

<div class="container mt-4">
<div class="d-flex justify-content-between align-items-center mb-4">
<h2>Editar Tipo de Producto: {{ $tipo_producto->nombre }}</h2>
<a class="btn btn-secondary" href="{{ route('tipo_producto.index') }}"> Volver al Listado</a>
</div>

<form action="{{ route('tipo_producto.update', $tipo_producto) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del Tipo:</label>
        <input type="text" 
               name="nombre" 
               class="form-control" 
               id="nombre" 
               value="{{ old('nombre', $tipo_producto->nombre) }}"
               placeholder="Ej: Mariscos, Pescados Enteros"
               required>
    </div>
    
    <button type="submit" class="btn btn-success">Actualizar Tipo de Producto</button>
</form>


</div>
@endsection