<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_comments', function (Blueprint $table) {

            $table->bigIncrements('id')->unsigned();

            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('CASCADE');

            $table->bigInteger('parent_ad_comment_id')->unsigned()->nullable();
            $table->foreign('parent_ad_comment_id')->references('id')->on('ad_comments')->onDelete('set null');

            $table->foreignId('user_id')->onDelete('set null')->nullable();    // unsignedBigInteger


            $table->boolean('approved')->default(false);

            $table->mediumText('comment');
            //             $table->enum('ad_type', ['B', 'S'])->comment('B => Buy, S => Sell');
            $table->enum('rating', ['1', '2', '3', '4', '5'])->comment('1 => Very Poor, 2 => Poor, 3 => So-so, 4 => Good, 5 => Excellent')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->index(['created_at'], 'ad_comments_created_at_index');

            $table->index(['user_id', 'approved'], 'ad_comments_user_id_approved_index');
            $table->index(['ad_id', 'approved'], 'ad_comments_ad_id_approved_index');

        });
        \Artisan::call('db:seed', array('--class' => 'AdCommentsWithInitData'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_comments');
    }
}
