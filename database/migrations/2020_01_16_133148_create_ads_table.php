<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            /*
                'state_id' => NULL,
                'city_id' => NULL,
                'area' => 'ihio',
                'zip' => '55555',
 */
            $table->bigIncrements('id');
//            $uuid = DB::raw('select UUID()');
            $table->uuid('uuid')->unique();

            $table->string('title', 255);
            $table->string('slug', 260)->unique();
            $table->boolean('phone_display')->default(false);
            $table->boolean('has_locations')->default(false);
            $table->enum('status', ['D', 'A', 'C', 'O', 'B'])->comment('D => Draft, A => Active, C => Cancelled, O => Closed, B => Banned');
            $table->decimal('price', 7);
            $table->enum('ad_type', ['B', 'S'])->comment('B => Buy, S => Sell');

            $table->date('expire_date');
            $table->mediumText('description');

            $table->foreignId('creator_id')->constrained('users')->onDelete('cascade');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->index(['ad_type','status'], 'ads_ad_type_status_index');
            $table->index(['ad_type', 'creator_id'], 'ads_ad_type_creator_id_index');
            $table->index(['status', 'expire_date'], 'ads_status_expire_date_index');
            $table->index(['price', 'expire_date'], 'ads_price_expire_date_index');
            $table->index(['title', 'price'], 'ads_title_price_index');

        });

        \Artisan::call('db:seed', array('--class' => 'AdsTableSeeder'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
