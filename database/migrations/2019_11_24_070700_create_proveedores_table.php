<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('pro_imagen',255)->default('https://www.wavelinkinc.com/wp-content/uploads/2016/01/default.png');
            $table->string('pro_nombre');
            $table->string('pro_descripcion',255);
            $table->date('pro_fundacion');
            $table->string('pro_telefono');
            $table->integer('pro_trabajadores');
            $table->string('pro_correo')->unique();
            $table->string('pro_contraseña');

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
        Schema::dropIfExists('proveedores');
    }
}
