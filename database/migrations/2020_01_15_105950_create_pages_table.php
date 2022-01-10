<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{

    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 255)->unique();
            $table->string('slug', 260)->unique();

            $table->mediumText('content');
            $table->string('content_shortly', 255)->nullable();
            $table->foreignId('creator_id')->constrained('users')->onDelete('cascade');    // unsignedBigInteger

            $table->boolean('is_homepage')->default(false);
            $table->boolean('published')->default(false);
            $table->string('image', 100)->nullable();

            $table->string('meta_description', 255)->nullable();
            $table->json('meta_keywords')->nullable();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->index(['is_homepage', 'published'], 'pages_is_homepage_published_index');
            $table->index(['creator_id', 'published', 'title'], 'pages_creator_id_published_title_index');
        });

        \Artisan::call('db:seed', array('--class' => 'PagesInitData'));

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
