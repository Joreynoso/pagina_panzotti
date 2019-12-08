<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planillas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('fecha');
            $table->String('observacion');
            $table->integer('cantidad');
            $table->bigInteger('tipomovimiento_id')->unsigned();
            $table->bigInteger('materiaprima_id')->unsigned();
            $table->bigInteger('empleado_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipomovimiento_id')->references('id')->on('tipo_movimientos');
            $table->foreign('materiaprima_id')->references('id')->on('materia_primas');
            $table->foreign('empleado_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planillas');
    }
}
