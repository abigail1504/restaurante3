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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id('codigo');
            $table->decimal('total',8, 2);
            $table->string('estado')->default('pendiente');
            $table->bigInteger('pedidos')->unsigned(); //Para relación;
            $table->foreign('pedidos')->references('codigo')->on('pedidos'); //Llave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};