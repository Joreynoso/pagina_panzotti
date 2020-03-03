<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaPrimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_primas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->bigInteger('tipomateriaprima_id')->unsigned();
            $table->bigInteger('proveedor_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('tipomateriaprima_id')
            ->references('id')
            ->on('tipo_materia_primas')
            ->onUdpate('cascade')
            ->onDelete('cascade');

            $table->foreign('proveedor_id')
            ->references('id')
            ->on('proveedors')
            ->onUdpate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia_primas');
    }
}
