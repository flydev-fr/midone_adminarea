<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_channels', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade');

            $table->string('channel_name', 50);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('last_chat_at')->nullable();
            $table->index(['sender_id', 'channel_name'], 'users_sender_id_channel_name_index');
            $table->index(['receiver_id', 'channel_name'], 'users_receiver_id_channel_name_index');

        });
        \Artisan::call('db:seed', array('--class' => 'chatChannelsWithInitData'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_channels');
    }
}
