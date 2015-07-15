<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBajaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bajas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->references('id')->on('users');
            $table->datetime('created_at');
            $table->datetime('updated_at');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::drop('salidas');
    }
}
