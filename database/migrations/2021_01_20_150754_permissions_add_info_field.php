<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionsAddInfoField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('permission.table_names');

        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->mediumText('description')->after('guard_name')->nullable();
        });
        \Artisan::call('db:seed', array('--class' => 'permissionsDescriptionWithInitData'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $tableNames = config('permission.table_names');
        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }

}
