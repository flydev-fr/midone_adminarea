<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAdBookmarksWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 1,
            'ad_id' => 3,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 1,
            'ad_id' => 2,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 1,
            'ad_id' => 5,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 1,
            'ad_id' => 6,
        ]);



       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 2,
            'ad_id' => 6,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 2,
            'ad_id' => 2,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 2,
            'ad_id' => 1,
        ]);



       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 3,
            'ad_id' => 5,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 3,
            'ad_id' => 6,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 3,
            'ad_id' => 2,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 3,
            'ad_id' => 1,
        ]);



       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 4,
            'ad_id' => 5,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 4,
            'ad_id' => 6,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 4,
            'ad_id' => 2,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 4,
            'ad_id' => 3,
        ]);


       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 5,
            'ad_id' => 5,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 5,
            'ad_id' => 1,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 5,
            'ad_id' => 2,
        ]);
       \DB::table('personal_ad_bookmarks')->insert([
            'user_id' => 5,
            'ad_id' => 4,
        ]);
    }
}
