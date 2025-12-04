<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';

    protected $fillable = ['nombre', 'precio', 'stock', 'tipo_producto_id'];

    /**
     * Obtener el tipo de producto al que pertenece este producto.
     */
    public function tipo_producto(): BelongsTo
    {
        return $this->belongsTo(TipoProducto::class, 'tipo_producto_id');
    }
}