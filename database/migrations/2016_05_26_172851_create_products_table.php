<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ean13',13)->nullable();
            $table->string('upc',12)->nullable();
            $table->string('name',200)->nullable();
            $table->decimal('price',20,6);
            $table->decimal('width',20,6);
            $table->decimal('height',20,6);
            $table->decimal('depth',20,6);
            $table->decimal('weight',20,6);
            $table->boolean('active')->default(true);
            $table->softDeletes();
            $table->timeStamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
