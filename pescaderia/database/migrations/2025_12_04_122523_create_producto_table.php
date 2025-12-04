<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'producto', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'nombre'); // Usamos 'nombre'
            $table->decimal(column: 'precio', total: 8, places: 2);
            $table->integer(column: 'stock');

            // 🌟 CORRECCIÓN 1: Definir la columna antes de la restricción
            $table->unsignedBigInteger('tipo_producto_id'); 
            
            // Definición de la llave foránea
            $table->foreign('tipo_producto_id')
                ->references('id')
                ->on('tipo_producto')
                ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};  