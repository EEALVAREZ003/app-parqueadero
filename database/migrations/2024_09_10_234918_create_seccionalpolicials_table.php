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
        Schema::create('seccionalpolicials', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');

            $table->unsignedBigInteger('id_direccion');
 
    $table->foreign('id_direccion')->references('id')->on('direccionpolicials');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seccionalpolicials');
    }
};
