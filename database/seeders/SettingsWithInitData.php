<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('settings')->insert([
            'name' => 'backend_items_per_page',
            'value' => 4,
        ]);
       \DB::table('settings')->insert([
            'name' => 'ads_per_page',
            'value' => 4,
        ]);
       \DB::table('settings')->insert([
            'name' => 'events_per_page',
            'value' => 4,
        ]);
       \DB::table('settings')->insert([
            'name' => 'site_name',
            'value' =>  'Ads',
        ]);

       \DB::table('settings')->insert([
            'name' => 'copyright_text',
            'value' =>  '© 2019 - 2020 All rights reserved',
        ]);

       \DB::table('settings')->insert([
            'name' => 'site_heading',
            'value' =>  'Task \'em all',
        ]);

    }
}
