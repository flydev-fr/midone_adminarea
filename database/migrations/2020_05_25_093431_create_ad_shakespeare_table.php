<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdShakespeareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ad_shakespeares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('line_id')->unsigned();
/*         'line_id' => [
            'type' => 'number',
            'analyzer' => 'standard'
        ],   */

            $table->string('play_name', 255);
/*         'play_name' => [
            'type' => 'string',
            'analyzer' => 'standard'
        ],  */

            $table->integer('speech_number')->unsigned();
/*         'speech_number' => [
            'type' => 'number',
            'analyzer' => 'standard'
        ],  */
            $table->string('line_number', 255);
/*         'line_number' => [
            'type' => 'string', // line_number??
            'analyzer' => 'standard'
        ],

 */

            $table->string('speaker', 255);
/*         'speaker' => [
            'type' => 'string',
            'analyzer' => 'standard'
        ],
 */

            $table->mediumText('text_entry');
            /*     'text_entry' => [
            'type' => 'text',
            'analyzer' => 'standard'
        ],   */



            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->index(['play_name','speaker'], 'shakespeares_play_name_speaker_index');
            $table->index(['play_name','line_number'], 'shakespeares_play_name_line_number_index');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ad_shakespeares');
    }
}
