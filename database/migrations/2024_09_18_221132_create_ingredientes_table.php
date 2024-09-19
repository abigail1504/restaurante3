<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientesTable extends Migration
{
    public function up()
    {
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plato_id');
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('plato_id')->references('id')->on('platos')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ingredientes');
    }
}

