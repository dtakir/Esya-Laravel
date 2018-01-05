<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('baslik');
            $table->string('ozellik');
            $table->integer('il_id');
            $table->integer('ilce_id');
            $table->integer('user_id');


            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('products');
    }
}