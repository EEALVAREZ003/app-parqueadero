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
        Schema::create('lugarestacionamientos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_interno');
 
    $table->foreign('id_interno')->references('id')->on('internos');

    $table->unsignedBigInteger('id_externo');
 
    $table->foreign('id_externo')->references('id')->on('externos');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugarestacionamientos');
    }
};
