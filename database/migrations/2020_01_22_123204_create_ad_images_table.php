<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_images', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('CASCADE');

            $table->string('image', 100);
            $table->boolean('main')->default(false);
            $table->boolean('is_video')->default(false);
            $table->smallInteger('video_width')->nullable();
            $table->smallInteger('video_height')->nullable();
            $table->string('info', 255);


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->index(['ad_id', 'main'], 'ad_images_ad_id_main_index');
/*         Schema::create($this->page_content_images_tb, function (Blueprint $table) {
            $table->increments('id');

            $table->integer('page_content_id')->unsigned();
            $table->foreign('page_content_id')->references('id')->on($this->page_contents_tb)->onDelete('CASCADE');

            $table->string('filename', 255);
            $table->boolean('is_main')->default(false);
            $table->boolean('is_video')->default(false);
            $table->smallInteger('video_width')->nullable();
            $table->smallInteger('video_height')->nullable();
            $table->string('info', 255)->nullable();
            $table->timestamp('created_at')->useCurrent();

            $table->unique(['page_content_id', 'filename'], 'page_contents_page_content_id_filename_unique');
            $table->index(['page_content_id', 'is_main'], 'page_contents_page_content_id_is_main');
            $table->index(['page_content_id', 'is_video', 'filename'], 'page_contents_page_content_id_is_video_filename');
            $table->index(['created_at'], 'page_content_message_documents_created_at_index');

        });
 */
        });

        \Artisan::call('db:seed', array('--class' => 'AdImagesWithInitData'));

    }


//INSERT INTO pd_product_image ( product_id,  image, is_main, is_video, video_type, video_ext, video_width, video_height, info )
//VALUES(  p_product_id,  p_image, p_is_main, p_is_video, p_video_type, p_video_ext, p_video_width, p_video_height, p_info );


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_images');
    }
}
