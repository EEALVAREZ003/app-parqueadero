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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('hora_entrada');
            $table->string('hora_salida');            
            $table->unsignedBigInteger('id_centinela');
 
    $table->foreign('id_centinela')->references('id')->on('centinelas');
    $table->unsignedBigInteger('id_vehiculo');
 
    $table->foreign('id_vehiculo')->references('id')->on('vehiculos');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
