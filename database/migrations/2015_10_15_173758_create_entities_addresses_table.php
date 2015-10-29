<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities_addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entity_id')->unsigned()->index;
            $table->integer('address_id')->unsigned()->index;
            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entities_addresses');
    }
}
