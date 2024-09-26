<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id('codigo');
            $table->bigInteger('cantidad');
            $table->decimal('precio_unitario', 8, 2);
            $table->bigInteger('pedidos')->unsigned(); //Para relación;
            $table->foreign('pedidos')->references('codigo')->on('pedidos'); //Llave foranea
            $table->bigInteger('platos')->unsigned(); //Para relación;
            $table->foreign('platos')->references('codigo')->on('platos'); //Llave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedidos');
    }
};
