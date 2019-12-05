<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('cantidad');
            $table->String('fecha');
            $table->bigInteger('materiaprimaplanilla_id')->unsigned();
            $table->bigInteger('materiaprimareceta_id')->unsigned();
            $table->timestamps();


            $table->foreign('materiaprimaplanilla_id')
            ->references('id')
            ->on('materiaprima_planillas')
            ->onUdpate('cascade')
            ->onDelete('cascade');


            $table->foreign('materiaprimareceta_id')
            ->references('id')
            ->on('materiaprima_recetas')
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
        Schema::dropIfExists('stocks');
    }
}
