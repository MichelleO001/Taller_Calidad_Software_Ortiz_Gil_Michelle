<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoProductoController;

/*
|--------------------------------------------------------------------------
| Rutas de Acceso Público
|--------------------------------------------------------------------------
*/

// Ruta raíz: Muestra el Dashboard Principal
Route::get('/', function () {
    // Usaremos el modelo TipoProducto para obtener los datos
    $tipos = App\Models\TipoProducto::with('productos')->get();
    return view('welcome', compact('tipos'));
})->name('dashboard'); // Nuevo nombre de ruta para el Dashboard

// El login ahora se accede en /login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'handleLogin'])->name('do.login');

/*
|--------------------------------------------------------------------------
| Rutas CRUD (Protegidas)
|--------------------------------------------------------------------------
*/
Route::middleware('web')->group(function () {
    // CRUD Tipos de Producto
    Route::resource('tipo_producto', TipoProductoController::class)->except(['show']); 

    // CRUD Productos
    Route::resource('productos', ProductoController::class)->except(['show']);
});
