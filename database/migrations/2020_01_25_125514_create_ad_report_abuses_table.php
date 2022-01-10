<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdReportAbusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_report_abuses', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();

            $table->bigInteger('ad_id')->unsigned();
            $table->foreign('ad_id')->references('id')->on('ads')->onUpdate('RESTRICT')->onDelete('CASCADE');

            $table->foreignId('user_id')->onUpdate('RESTRICT')->onDelete('CASCADE');    // unsignedBigInteger

            $table->string('text', 255);

            $table->timestamp('created_at')->useCurrent();
            $table->index(['created_at'], 'ad_report_abuses_created_at_index');

            $table->index(['user_id', 'text'], 'ad_report_abuses_user_id_text_index');
        });
        \Artisan::call('db:seed', array('--class' => 'AdReportAbusesWithInitData'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_report_abuses');
    }
}
