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
        Schema::create('mascotas_recetas', function (Blueprint $table) {
            $table->id();

            //Fk
            $table->unsignedBigInteger('mascota_id');
            $table->unsignedBigInteger('receta_id');


            $table->foreign('mascota_id')->references('id')->on('mascotas');
            $table->foreign('receta_id')->references('id')->on('recetas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas_recetas');
    }
};
