<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;


class permissionsWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Permission::create(['name' => PERMISSION_APP_ADMIN, 'guard_name' => 'web']);
        Permission::create(['name' => PERMISSION_ADD_PAGE, 'guard_name' => 'web']);

        Permission::create(['name' => PERMISSION_ADD_AD, 'guard_name' => 'web']);
        Permission::create(['name' => PERMISSION_EDIT_AD, 'guard_name' => 'web']);


        // CONTENT EDITOR ROLE BLOCK START
        Permission::create(['name' => PERMISSION_DELETE_AD, 'guard_name' => 'web']);
        Permission::create(['name' => PERMISSION_EDIT_PAGE, 'guard_name' => 'web']);
        Permission::create(['name' => PERMISSION_DELETE_PAGE, 'guard_name' => 'web']);
        // CONTENT EDITOR ROLE BLOCK END

        // CUSTOMER ROLE BLOCK BEGIN
        Permission::create(['name' => PERMISSION_USE_SERVICES, 'guard_name' => 'web']);
        Permission::create(['name' => CAN_USE_ADS_SERVICES, 'guard_name' => 'web']);
        Permission::create(['name' => SERVICE_CAN_READ_SELL_ADS, 'guard_name' => 'web']);
        Permission::create(['name' => SERVICE_CAN_READ_BUY_ADS, 'guard_name' => 'web']);
        Permission::create(['name' => SERVICE_CAN_ADD_BUY_ADS, 'guard_name' => 'web']);
        Permission::create(['name' => SERVICE_CAN_ADD_SELL_ADS, 'guard_name' => 'web']);
        // CUSTOMER ROLE BLOCK END


    }
}
