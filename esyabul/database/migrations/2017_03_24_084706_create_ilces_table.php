<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIlcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ilces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ilce');
            $table->integer('ilID')->unsigned();
            $table->foreign('ilID')->references('id')->on('ils');
        });
    }
    public function down()
    {
        Schema::dropIfExists('ilces');
    }
}
