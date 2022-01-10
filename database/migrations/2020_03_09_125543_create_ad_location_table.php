<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_locations', function (Blueprint $table) {
//            $table->bigIncrements('id');
            $table->id();

//            $table->bigInteger('ad_id')->unsigned();
//            $table->foreign('ad_id')->references('id')->on('ads')->onDelete('CASCADE');
            $table->foreignId('ad_id')->onDelete('cascade');

            $table->string('location', 255);
            $table->decimal('lat', 12,8);
            $table->decimal('lng', 12,8);

            $table->string('color', 7);
            $table->mediumText('content');
            $table->smallInteger('ordering')->unsigned();

            $table->boolean('opened')->default(false);
            $table->boolean('featured')->default(false);

            $table->string('country', 2);
            $table->string('image', 100)->nullable() ;
            $table->string('image_info', 255)->nullable();

            $table->timestamp('created_at')->useCurrent();

            $table->index(['ad_id', 'opened'], 'ad_locations_ad_id_opened_index');
            $table->index(['ad_id', 'featured'], 'ad_locations_ad_id_featured_index');
            $table->index(['ad_id', 'ordering'], 'ad_locations_ad_id_ordering_index');
        });
        \Artisan::call('db:seed', array('--class' => 'AdLocationsWithInitData'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_locations');
    }
}
