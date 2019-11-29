<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prod_imagen',255);
            $table->string('prod_nombre');
            $table->double('prod_precio');
            $table->integer('prod_stock');
            $table->string('prod_descripcion',255);

            $table->integer('categorias_id')->unsigned();
            $table->foreign('categorias_id')->references('id')->on('categorias');

            $table->integer('proveedores_id')->unsigned();
            $table->foreign('proveedores_id')->references('id')->on('proveedores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
