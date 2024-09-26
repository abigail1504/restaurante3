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
        Schema::create('platos', function (Blueprint $table) {
            $table->id('codigo');
            $table->string('nombre', 100);
            $table->decimal('precio', 8, 2);
            $table->string('descripcion');
            $table->bigInteger('menus')->unsigned(); //Para relación;
            $table->foreign('menus')->references('codigo')->on('menus'); //Llave foranea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
