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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_detalles');
 
    $table->foreign('id_detalles')->references('id')->on('detalles');

    $table->unsignedBigInteger('id_lugarestacionamiento');
 
    $table->foreign('id_lugarestacionamiento')->references('id')->on('lugarestacionamientos');

    $table->unsignedBigInteger('id_responsable');
 
    $table->foreign('id_responsable')->references('id')->on('responsables');

    $table->unsignedBigInteger('id_clasevehiculo');
 
    $table->foreign('id_clasevehiculo')->references('id')->on('clasevehiculos');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculos');
    }
};
