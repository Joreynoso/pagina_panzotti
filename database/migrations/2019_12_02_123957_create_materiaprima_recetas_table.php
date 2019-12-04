<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaprimaRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiaprima_recetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('unidadmedida');
            $table->bigInteger('materiaprima_id')->unsigned();
            $table->bigInteger('receta_id')->unsigned();
            $table->timestamps();

            $table->foreign('materiaprima_id')
            ->references('id')
            ->on('materia_primas')
            ->onUdpate('cascade')
            ->onDelete('cascade');

            $table->foreign('receta_id')

            ->on('recetas')
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
        Schema::dropIfExists('materiaprima_recetas');
    }
}
