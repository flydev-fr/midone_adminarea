<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Actions\Fortify\CreateNewUser;

class usersWithInitData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app(CreateNewUser::class)->create([
            'id'         => 1,
            'name'       => 'Admin',
            'email'      => 'admin@site.com',
            'password'   => '11111111',
            'status'     => 'A',
        ], true, [PERMISSION_APP_ADMIN]);

        app(CreateNewUser::class)->create([
            'id'         => 2,
            'name'       => 'Manager',
            'email'      => 'manager@site.com',
            'password'   => '11111111',
            'status'     => 'A',
        ], true, [PERMISSION_ADD_AD, PERMISSION_EDIT_AD, PERMISSION_DELETE_AD]);



        app(CreateNewUser::class)->create([
            'id'         => 3,
            'name'       => 'John Doe',
            'email'      => 'john_doe@site.com',
            'password'   => '11111111',
            'status'     => 'A',
        ], true, []);

        app(CreateNewUser::class)->create([
            'id'         => 4,
            'name'       => 'Jane Doe',
            'email'      => 'jane_doe@site.com',
            'password'   => '11111111',
            'status'     => 'A',
        ], true, []);


        app(CreateNewUser::class)->create([
            'id'         => 5,
            'name'       => 'Tony Black',
            'email'      => 'tony_black@site.com',
            'password'   => '11111111',
            'status'     => 'A',
        ], true, []);


        app(CreateNewUser::class)->create([
            'id'         => 6,
            'name'       => 'Adam Lang',
            'email'      => 'adam_lang@site.com',
            'password'   => '11111111',
            'status'     => 'A',
        ], true, []);

/*       \DB::table('users')->insert([
            'id' => 3,
            'name' => '',
            'email' => 'tony_black@site.com',
            'status'=> 'A',
            'password' => Hash::make('111111'),
            'first_name' => 'Tony',
            'last_name' => 'Black',
            'phone' => '247-159-0976',
            'website' => 'tony-black@select-task.site.com',
        ]);
       \DB::table('users')->insert([
            'id' => 4,
            'name' => 'AdamLang',
            'email' => 'adam_lang@site.com',
            'status'=> 'A',
            'password' => Hash::make('111111'),
            'first_name' => 'Adam',
            'last_name' => 'Lang',
            'phone' => '831-8539-4996',
            'website' => 'adam_lang@select-task.site.com',
        ]);

*/
    }
}
