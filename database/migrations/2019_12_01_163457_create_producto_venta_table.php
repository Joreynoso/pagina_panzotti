<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('peso');
            $table->String('monto');
            $table->boolean('estado')->default(false);
            $table->bigInteger('producto_id')->unsigned();
            $table->bigInteger('venta_id')->unsigned();
            $table->timestamps();

            $table->foreign('producto_id')
            ->references('id')
            ->on('productos')
            ->onUdpate('cascade')
            ->onDelete('cascade');

            $table->foreign('venta_id')
            ->references('id')
            ->on('ventas')
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
        Schema::dropIfExists('producto_venta');
    }
}
