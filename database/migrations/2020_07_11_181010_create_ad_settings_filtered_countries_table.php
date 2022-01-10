<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdSettingsFilteredCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings_filtered_countries', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();

            $table->string('country_code', 2);

            $table->boolean('select_in_location')->default(false);
            $table->boolean('select_in_phone')->default(false);

            $table->timestamp('created_at')->useCurrent();
            $table->index(['created_at'], 'ad_settings_filtered_countries_created_at_index');

            $table->index(['country_code', 'select_in_location'], 'ad_settings_filtered_countries_2_index');
            $table->index(['country_code', 'select_in_phone'], 'ad_settings_filtered_countries_3_index');
        });
        \Artisan::call('db:seed', array('--class' => 'AdSettingsFilteredCountriesWithInitData'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings_filtered_countries');
    }
}
