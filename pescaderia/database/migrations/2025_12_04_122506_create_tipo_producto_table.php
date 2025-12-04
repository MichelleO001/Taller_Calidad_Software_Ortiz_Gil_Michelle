<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(table: 'tipo_producto', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'nombre'); // Usamos 'nombre'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipo_producto');
    }
};