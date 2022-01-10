<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('email', 100)->unique();
            $table->enum('status',
                ['C', 'N', 'A', 'I', 'B'])->default('N')->comment(' C => Waiting confirmation code,  N => New(Waiting activation), A=>Active, I=>Inactive, B=>Banned');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('confirmation_code', 8)->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->index(['status', 'name'], 'users_status_name_index');
        });
        \Artisan::call('db:seed', array('--class' => 'usersWithInitData'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
