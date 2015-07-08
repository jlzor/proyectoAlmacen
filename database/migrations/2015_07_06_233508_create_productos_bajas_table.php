<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosBajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_bajas', function (Blueprint $table) {
            $table->increments('folio');
            $table->integer('id_salidas')->references('id')->on('salidas');
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
