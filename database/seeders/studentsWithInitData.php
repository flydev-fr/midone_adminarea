<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class studentsWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->delete();
        \DB::table('students')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Lada',
                    'course' => 'BCA',
                ),

            1 =>
                array (
                    'id' => 2,
                    'name' => 'Ferry',
                    'course' => 'BCOM',
                ),

            2 =>
                array (
                    'id' => 3,
                    'name' => 'Smith',
                    'course' => 'BSC',
                ),

            3 =>
                array (
                    'id' => 4,
                    'name' => 'Watson',
                    'course' => 'BCA',
                ),

            4 =>
                array (
                    'id' => 5,
                    'name' => 'Starc',
                    'course' => 'BCOM',
                ),

            5 =>
                array (
                    'id' => 6,
                    'name' => 'Marvin',
                    'course' => 'BCOM',
                ),

            6 =>
                array (
                    'id' => 7,
                    'name' => 'Ponting',
                    'course' => 'BCA',
                ),

        ));
    }
}
