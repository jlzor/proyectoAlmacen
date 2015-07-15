<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosAltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_altas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_altas')->references('id')->on('altas');
            $table->integer('id_productos')->references('id')->on('productos');
            $table->integer('cantidad');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    Schema::drop('productos_bajas');     
    }
}
