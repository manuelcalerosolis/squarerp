<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressEntityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_entity', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('address_id')->unsigned()->index;
            $table->integer('entity_id')->unsigned()->index;
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('address_entity');
    }
}
