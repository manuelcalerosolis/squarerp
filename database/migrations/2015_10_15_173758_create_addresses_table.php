<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('entity_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->string('first_name', 32);
            $table->string('last_name', 32)->nullable();
            $table->string('address1', 128);
            $table->string('address2', 128)->nullable();
            $table->string('postal_code', 12)->nullable();
            $table->string('city', 64)->nullable();
            $table->string('other')->nullable();
            $table->string('phone', 32)->nullable();
            $table->string('phone_mobile', 32)->nullable();
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
        Schema::drop('addresses');
    }
}
