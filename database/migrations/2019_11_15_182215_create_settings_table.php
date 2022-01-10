<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 255)->unique();
            $table->string('value', 255);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
        \Artisan::call('db:seed', array('--class' => 'SettingsWithInitData'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('settings', function ($table) {
//            $table->dropIndex('settings_created_at_index');
//        });
        Schema::dropIfExists('settings');
    }
}
