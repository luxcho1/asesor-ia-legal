<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatHistorialTable extends Migration
{
    public function up()
    {
        Schema::create('chat_historial', function (Blueprint $table) {
            $table->string('user_id');
            $table->id('id_historial');
            $table->timestamp('fecha')->useCurrent();
            $table->string('especializacion');
            $table->text('Conversacion');
            $table->text('bot_reply');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_historial');
    }
}
