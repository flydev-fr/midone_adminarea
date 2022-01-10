<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class servicesWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->delete();
        \DB::table('services')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'can_read_sell_ads',
                    'label' => 'Can read sell ads',
                    'active' => true,
                    'monthly_charge' => 3.5,
                    'ordering' => 1,
                ),

            1 =>
                array (
                    'id' => 2,
                    'name' => 'can_read_buy_ads',
                    'label' => 'Can read buy ads',
                    'active' => true,
                    'monthly_charge' => 3.2,
                    'ordering' => 2,
                ),

            2 =>
                array (
                    'id' => 3,
                    'name' => 'can_add_buy_ads',
                    'label' => 'Can add buy ads',
                    'active' => true,
                    'monthly_charge' => 4.0,
                    'ordering' => 3,
                ),

            3 =>
                array (
                    'id' => 4,
                    'name' => 'can_add_sell_ads',
                    'label' => 'Add sell ads',
                    'active' => true,
                    'monthly_charge' => 4.5,
                    'ordering' => 4,
                ),

            ));

    }
}
