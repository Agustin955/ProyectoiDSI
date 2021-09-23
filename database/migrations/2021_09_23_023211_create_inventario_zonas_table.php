<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioZonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_zonas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zona');
            $table->string('nombreEspecie');
            $table->integer('cantidad');
            $table->integer('estado')->default(1);
            $table->foreignId('venta_id')->references('id')->on('ventas');
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
        Schema::dropIfExists('inventario_zonas');
    }
}
