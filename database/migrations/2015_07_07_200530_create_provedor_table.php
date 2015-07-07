<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provedores', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('categoria');
            $table->string('direccion',60);
            $table->integer('telefono');
            $table->string('ciudad');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::drop('provedores');
    }
}
