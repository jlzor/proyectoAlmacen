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
            $table->integer('id_categoria')->references('categorias')->on('id');
            $table->string('direccion',60);
            $table->integer('telefono');
            $table->string('ciudad');
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
    Schema::drop('provedores');
    }
}
