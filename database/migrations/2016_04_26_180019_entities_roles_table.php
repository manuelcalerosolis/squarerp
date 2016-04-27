<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EntitiesRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities_roles', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('entity_id')->unsigned()->index();
            $table->integer('role_id')->unsigned()->index();
            $table->softDeletes();
            $table->timeStamps();

            $table->foreign('entity_id')
                ->references('id')
                ->on('entities');

            $table->foreign('role_id')
                ->references('id')
                ->on('roles');

            $table->unique(['id', 'entity_id', 'role_id']);

        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entities_roles');

    }
}
