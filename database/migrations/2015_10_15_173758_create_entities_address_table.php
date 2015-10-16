<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntitiesAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entities_id')->unsigned()->index;
            $table->integer('address_id')->unsigned()->index;

            $table->foreign('entities_id')->references('id')->on('entities')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('address')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('entities_address');
    }
}
