<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->smallIncrements('id')->unsigned();
            $table->string('name', 100)->unique();
            $table->string('label', 255)->unique();
            $table->boolean('active')->default(false);
            $table->decimal('monthly_charge', 7);
            $table->smallInteger('ordering')->unsigned();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            $table->index(['active', 'name'], 'services_active_name_index');
            $table->index(['active', 'ordering'], 'services_active_ordering_index');
        });
        \Artisan::call('db:seed', array('--class' => 'servicesWithInitData'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
