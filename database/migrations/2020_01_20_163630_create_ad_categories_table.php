<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_categories', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('CASCADE');

            $table->smallInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('CASCADE');

            $table->timestamp('created_at')->useCurrent();
            $table->index(['ad_id', 'category_id'], 'categories_ad_id_category_id_index');
        });
        \Artisan::call('db:seed', array('--class' => 'AdsCategoryTableSeeder'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_categories');
    }
}
