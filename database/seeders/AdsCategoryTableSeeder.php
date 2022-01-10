<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdsCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('ad_categories')->delete();

        \DB::table('ad_categories')->insert(array (
            0 =>
            array (
                'ad_id' => 1,
                'category_id' => 2,
            ),
            1 =>
            array (
                'ad_id' => 1,
                'category_id' => 4,
            ),

            2 =>
            array (
                'ad_id' => 2,
                'category_id' => 2,
            ),
            3 =>
            array (
                'ad_id' => 2,
                'category_id' => 4,
            ),

            4 =>
            array (
                'ad_id' => 3,
                'category_id' => 2,
            ),
            5 =>
            array (
                'ad_id' => 3,
                'category_id' => 4,
            ),

            //////////////////
            6 =>
            array (
                'ad_id' => 4,
                'category_id' => 1,
            ),
            7 =>
            array (
                'ad_id' => 5,
                'category_id' => 1,
            ),
            8 =>
            array (
                'ad_id' => 6,
                'category_id' => 4,
            ),
        ));


    }
}
