<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdReportAbusesWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \Log::info('-1 AdReportAbusesWithInitData::');

        \DB::table('ad_report_abuses')->delete();
        \Log::info('-2 AdReportAbusesWithInitData::');

        \DB::table('ad_report_abuses')->insert(array(
                array(
                    'ad_id' => 1,
                    'user_id' => 1,
                    'text'  => 'This ad has abusing content.',
                ),
                array(
                    'ad_id' => 1,
                    'user_id' => 2,
                    'text'  => 'This ad has abusing images and content. Remove it',
                ),
                array(
                    'ad_id' => 2,
                    'user_id' => 4,
                    'text'  => 'This ad has a lot of abusing content. Admin\'s must check it Lorem amet, consectetur adipiscing elit, sed do eiusmod',
                ),


            array(
                'ad_id' => 8,
                'user_id' => 1,
                'text'  => 'This ad has abusing content. Lorem amet, consectetur adipiscing elit, sed do eiusmod',
            ),
            array(
                'ad_id' => 8,
                'user_id' => 2,
                'text'  => 'This ad has abusing images and content. Remove it. Lorem amet, consectetur adipiscing elit, sed do eiusmod',
            ),

            array(
                'ad_id' => 9,
                'user_id' => 2,
                'text'  => 'This ad breaks rules of the site. I think we need to remove it. Lorem amet, consectetur adipiscing elit, sed do eiusmod',
            ),

        ));
        \Log::info('-3 AdReportAbusesWithInitData::');

    }
}
