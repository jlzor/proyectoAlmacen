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
            $table->increments('id');
            $table->integer('id_bajas')->references('id_baja')->on('bajas');
            $table->integer('id_usuarios')->references('id')->on('users');
            $table->integer('id_productos')->references('id')->on('productos');
            $table->integer('cantidad');
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
    Schema::drop('productos_bajas');     
    }
}
