<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMPPlanillaIngresoEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_p_planilla_ingreso_egresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('fecha');
            $table->String('observacion');
            $table->bigInteger('tipomovimiento_id')->unsigned();
            $table->bigInteger('empleado_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipomovimiento_id')->references('id')->on('tipo_movimientos');
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
        Schema::dropIfExists('m_p_planilla_ingreso_egresos');
    }
}
