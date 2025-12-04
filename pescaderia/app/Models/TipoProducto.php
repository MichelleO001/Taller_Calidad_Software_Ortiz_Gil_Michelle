<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoProducto extends Model
{
    use HasFactory;

    protected $table = 'tipo_producto';

    protected $fillable = ['nombre'];

    /**
     * Obtener los productos de este tipo.
     */
    public function productos(): HasMany
    {
        // El segundo argumento es la FK en la tabla 'producto'
        return $this->hasMany(Producto::class, 'tipo_producto_id');
    }
}