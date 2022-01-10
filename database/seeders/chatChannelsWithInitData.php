<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class chatChannelsWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('chat_channels')->insert([
            'sender_id'   => 5,
            'receiver_id' => 2,
            'channel_name' => 'AABB',
            'created_at' => '2020-12-24 06:41:51',
            'last_chat_at' => '2020-12-25 08:51:53',
        ]);

        \DB::table('chat_channels')->insert([
            'sender_id'   => 5,
            'receiver_id' => 3,
            'channel_name' => 'VVEE',
            'created_at' => '2020-12-27 00:21:23',
            'last_chat_at' => '2020-12-27 00:21:23',
        ]);


        \DB::table('chat_channels')->insert([
            'sender_id'   => 1,
            'receiver_id' => 3,
            'channel_name' => 'JJYY',
            'created_at' => '2020-12-28 02:31:03',
            'last_chat_at' => '2020-12-28 02:31:03',
        ]);

    }
}
