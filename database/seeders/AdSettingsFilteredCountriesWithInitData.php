<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdSettingsFilteredCountriesWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings_filtered_countries')->insert(array (
            0 =>
                array (
                    'country_code' => 'AU',
                    'select_in_location' => 1,
                    'select_in_phone' => 0,
                ),
            1 =>
                array (
                    'country_code' => 'UA',
                    'select_in_location' => 1,
                    'select_in_phone' => 1,
                ),

            2 =>
                array (
                    'country_code' => 'US',
                    'select_in_location' => 1,
                    'select_in_phone' => 1,
                ),
            3 =>
                array (
                    'country_code' => 'BR',
                    'select_in_location' => 0,
                    'select_in_phone' => 1,
                ),
        ));

    }
}
