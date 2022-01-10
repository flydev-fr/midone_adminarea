<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name',50)->unique();
            $table->string('slug', 55)->unique();
            $table->mediumText('description');
            $table->string('image', 100)->nullable();

            $table->timestamp('created_at')->useCurrent();
        });

        \Artisan::call('db:seed', array('--class' => 'CategoryTableSeeder'));


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
