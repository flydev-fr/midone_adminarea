<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class userPropsWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('user_props')->insert([
            'user_id' => 1,
            'name' => 'Official position',
            'value'=> 'Top manager',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 2,
            'name' => 'Official position',
            'value'=> 'Driver',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 3,
            'name' => 'Official position',
            'value'=> 'Office manager',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 4,
            'name' => 'Official position',
            'value'=> 'Seller at shop',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 5,
            'name' => 'Official position',
            'value'=> 'Ads manager',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 6,
            'name' => 'Official position',
            'value'=> 'Seller at shop',
        ]);


       \DB::table('user_props')->insert([
            'user_id' => 1,
            'name' => 'Family status',
            'value'=> 'Married',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 2,
            'name' => 'Family status',
            'value'=> 'Divorced',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 4,
            'name' => 'Family status',
            'value'=> 'Married',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 5,
            'name' => 'Family status',
            'value'=> 'Unmarried',
        ]);
       \DB::table('user_props')->insert([
            'user_id' => 6,
            'name' => 'Family status',
            'value'=> 'Married',
        ]);


       \DB::table('user_props')->insert([
            'user_id' => 1,
            'name' => 'Has children',
            'value'=> '2 boys',
        ]);

       \DB::table('user_props')->insert([
            'user_id' => 4,
            'name' => 'Has children',
            'value'=> '1 boy, 1 girl',
        ]);

       \DB::table('user_props')->insert([
            'user_id' => 5,
            'name' => 'Has children',
            'value'=> '3 girls',
        ]);

       \DB::table('user_props')->insert([
            'user_id' => 6,
            'name' => 'Has children',
            'value'=> '2 boys, 1 girl',
        ]);

    }
}
