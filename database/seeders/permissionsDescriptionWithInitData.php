<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class permissionsDescriptionWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableNames = config('permission.table_names');

//        echo '<pre>::$tableNames[\'permissions\']::'.print_r($tableNames['permissions'],true).'</pre>';
        DB::statement("UPDATE ".$tableNames['permissions']." SET description = 'User, having \"App admin\" permission can do all operations in the app, including system dictionaries modification' WHERE id = 1");       // 1 => App admin

        DB::statement("UPDATE  ".$tableNames['permissions']." SET description = 'User, having \"Add ad\" can add new ads into the system' WHERE id = 2"); // 2=>Add ad

        DB::statement("UPDATE  ".$tableNames['permissions']." SET description = 'User, having \"Edit ad\" can edit ads in the system' WHERE id = 3");  // 3=>Edit ad
        DB::statement("UPDATE  ".$tableNames['permissions']." SET description = '<p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>User, having \"Delete ad\" can delete ads in the system </p>L<p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>' WHERE id = 4");  // 4=>Delete ad

        DB::statement("UPDATE ".$tableNames['permissions']." SET description = 'User, having \"Add page\" can add page in the system' WHERE id = 5");  // 5=>Add page
        DB::statement("UPDATE ".$tableNames['permissions']." SET description = 'User, having \"Edit page\" can add page in the system' WHERE id = 6");  // 6=>Edit page
        DB::statement("UPDATE ".$tableNames['permissions']." SET description = 'User, having \"Delete page\" can delete page in the system' WHERE id = 7");  // 7=>Delete page

        DB::statement("UPDATE ".$tableNames['permissions']." SET description = '<p>User, having \"Use services\" can use services with external API of the system </p><p>Lorem <strong>ipsum dolor sit</strong> amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis <strong>nostrud exercitation</strong> ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint  occaecat cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>
<ul>
    <li>Lorem 1st point </li>
    <li>Lorem 2nd point </li>
    <li>Lorem 3rd point </li>
</ul>
<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea  commodo consequat. Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint  occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt  mollit anim id est laborum.
</p>' WHERE id = 7");  // 8=>Use services
    }
}
