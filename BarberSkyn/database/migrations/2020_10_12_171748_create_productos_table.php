<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedInteger('id_proveedor');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
            $table->unsignedInteger('id_establecimiento');
            $table->foreign('id_establecimiento')->references('id')->on('establecimientos');
            $table->string('nombre');
            $table->float('costo', 5, 2);
            $table->float('precioPublico', 5, 2);
            $table->string('foto');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->string('estado');
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
