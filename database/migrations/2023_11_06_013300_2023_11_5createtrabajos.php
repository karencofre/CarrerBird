<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_trabajo')->nullable();
            $table->string('fecha_inicio_trabajo')->nullable();
            $table->string('fecha_fin_trabajo')->nullable();
            $table->unsignedBigInteger('trabajador')->nullable();

            $table->foreign('trabajador')->references('id')->on('trabajadors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajos');
    }
};
