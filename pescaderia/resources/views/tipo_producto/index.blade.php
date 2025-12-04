@extends('layouts.app')

@section('title', 'Lista de Tipos de Producto')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Tipos de Producto</h1>
    <a href="{{ route('tipo_producto.create') }}" class="btn btn-success">Crear Nuevo Tipo</a>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th width="150px">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tipos as $tipo)
        <tr>
            <td>{{ $tipo->id }}</td>
            <td>{{ $tipo->nombre }}</td> 
            <td>
                <form action="{{ route('tipo_producto.destroy', $tipo->id) }}" method="POST" style="display:inline-block;">
                    <a href="{{ route('tipo_producto.edit', $tipo->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este tipo de producto?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection