<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeighborhoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neighborhoods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('city');
            $table->string('country', 2);
            $table->string('state', 2);
            $table->multiPolygon('geometry');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->index(['city', 'name'], 'neighborhoods_city_name_index');
            $table->index(['country', 'state'], 'neighborhoods_country_state_index');

        });

//        \Artisan::call('db:seed', array('--class' => 'AdLocationsWithInitData'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighborhoods');
    }
}
