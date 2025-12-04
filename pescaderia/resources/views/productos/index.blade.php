@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Lista de Productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-success">Crear Nuevo Producto</a>
</div>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo de Producto</th> <th>Precio</th>
            <th>Stock</th>
            <th width="150px">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->tipo_producto->nombre ?? ''}}</td> 
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection