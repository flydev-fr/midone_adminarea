<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secrets', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('user_id')->onDelete('set null');    // unsignedBigInteger

            $table->string('secret', 255);
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('secrets');
    }
}
