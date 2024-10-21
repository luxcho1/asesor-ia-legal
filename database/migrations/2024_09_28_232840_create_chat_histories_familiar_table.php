<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatHistoriesFamiliarTable extends Migration
{
    public function up()
    {
        Schema::create('chat_histories_familiar', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->text('user_message');
            $table->text('bot_reply');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_histories_familiar');
    }
}
