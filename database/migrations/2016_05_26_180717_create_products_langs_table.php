<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_langs', function (Blueprint $table) {

            $table->integer('product_id')->unsigned()->index();
            $table->integer('lang_id')->unsigned()->index();
            $table->longText('name');
            $table->longText('description');
            $table->string('description_short',255);
            $table->string('description_meta',255);
            $table->string('keywords_meta',128);
            $table->string('title_meta',128);

            $table->softDeletes();
            $table->timeStamps();

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade');

            $table->foreign('lang_id')
                ->references('id')
                ->on('langs')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products_langs');
    }
}
