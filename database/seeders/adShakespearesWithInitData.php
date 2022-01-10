<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class adShakespearesWithInitData extends Seeder        ///_wwwroot/lar/ads-backend-api/database/seeds/adShakespearesWithInitData.php
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ad_shakespeares')->delete();

        \DB::table('ad_shakespeares')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'line_id' => 1,
                    'play_name' => 'play_name 1',
                    'speech_number' => 1,
                    'line_number' => 2,
                    'speaker' => 'speaker 1',
                    'text_entry' => 'speaker 1 text_entry 1',
                ),
            1 =>
                array (
                    'id' => 2,
                    'line_id' => 2,
                    'play_name' => 'play_name 2',
                    'speech_number' => 2,
                    'line_number' => 3,
                    'speaker' => 'speaker 2',
                    'text_entry' => 'speaker 2 text_entry 2',
                ),
            2 =>
                array (
                    'id' => 3,
                    'line_id' => 1,
                    'play_name' => 'play_name 3',
                    'speech_number' => 3,
                    'line_number' => 4,
                    'speaker' => 'speaker 3',
                    'text_entry' => 'speaker 3 text_entry 3',
                ),
//        ),
        ));

        /*
        $table->timestamp('created_at')->useCurrent();
        $table->timestamp('updated_at')->nullable();

        $table->index(['play_name','speaker'], 'shakespeares_play_name_speaker_index');
        $table->index(['play_name','line_number'], 'shakespeares_play_name_line_number_index');

    });
*/
    }
}
