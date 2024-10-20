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
        Schema::create('solicitudes_asistencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abogado_id'); // Referencia al abogado
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('abogado_id')->references('id')->on('abogados')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('solicitudes_asistencia');
    }
};
