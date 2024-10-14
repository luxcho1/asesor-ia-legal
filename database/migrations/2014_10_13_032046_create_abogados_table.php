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
        Schema::create('abogados', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary(); // Usar el ID de la tabla users como clave primaria
            $table->string('imagen');
            $table->unsignedBigInteger('rut_abogado')->unique();
            $table->string('name');
            $table->string('especialidad');
            $table->string('email');
            $table->string('telefono');
            $table->string('sueldo');
            $table->string('biografia');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abogados');
    }
};
