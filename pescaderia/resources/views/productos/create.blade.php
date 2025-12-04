@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Crear Nuevo Producto</h2>
                <a class="btn btn-primary" href="{{ route('productos.index') }}"> Volver</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <strong>¡Ups!</strong> Hubo algunos problemas con tu entrada.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- El formulario apunta al método store del ProductoController --}}
    <form action="{{ route('productos.store') }}" method="POST" class="mt-4">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre del Producto" value="{{ old('nombre') }}" required>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group mb-3">
                    <label for="tipo_producto_id" class="form-label">Tipo de Producto:</label>
                    <select name="tipo_producto_id" class="form-control" required>
                        <option value="">-- Seleccione Tipo --</option>
                        @foreach ($tipos as $tipo)
                            <option value="{{ $tipo->id }}" {{ old('tipo_producto_id') == $tipo->id ? 'selected' : '' }}>
                                {{ $tipo->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group mb-3">
                    <label for="precio" class="form-label">Precio:</label>
                    <input type="number" name="precio" class="form-control" placeholder="Ej: 15.50" step="0.01" min="0" value="{{ old('precio') }}" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="form-group mb-3">
                    <label for="stock" class="form-label">Stock:</label>
                    <input type="number" name="stock" class="form-control" placeholder="Cantidad en stock" min="0" value="{{ old('stock') }}" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
                <button type="submit" class="btn btn-success">Guardar Producto</button>
            </div>
        </div>
    </form>
@endsection