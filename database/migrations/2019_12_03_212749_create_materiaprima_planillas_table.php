<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaprimaPlanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiaprima_planillas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('cantidad');
            $table->bigInteger('materiaprima_id')->unsigned();
            $table->bigInteger('planilla_id')->unsigned();
            $table->timestamps();

            $table->foreign('materiaprima_id')
            ->references('id')
            ->on('materia_primas')
            ->onUdpate('cascade')
            ->onDelete('cascade');

            $table->foreign('planilla_id')
            ->references('id')
            ->on('planillas')
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
        Schema::dropIfExists('materiaprima_planillas');
    }
}
