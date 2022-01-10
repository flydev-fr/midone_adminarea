<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAdBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_ad_bookmarks', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->foreignId('user_id')->onUpdate('RESTRICT')->onDelete('CASCADE');    // unsignedBigInteger

            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->unique(['user_id','ad_id'], 'personal_ad_bookmarks_user_id_ad_id_unique');
        });

        \Artisan::call('db:seed', array('--class' => 'PersonalAdBookmarksWithInitData'));

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_ad_bookmarks');
    }
}
