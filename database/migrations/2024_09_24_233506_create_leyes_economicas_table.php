<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeyesEconomicasTable extends Migration
{
    public function up(): void
    {
        Schema::create('leyes_economicas', function (Blueprint $table) {
            $table->id();
            $table->longText('descripcion_ley');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('leyes_economicas');
    }
};
