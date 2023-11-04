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
        Schema::create('trabajadors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('correo')->nullable();
            $table->string('cargo')->nullable();
            $table->string('url_foto')->nullable();
            $table->integer('puntuacion')->nullable();
            $table->text('acerca_de')->nullable();
            $table->unsignedBigInteger('trabajo_id')->nullable();
            $table->unsignedBigInteger('formacion_id')->nullable();

            $table->foreign('trabajo_id')->references('id')->on('trabajos');
            $table->foreign('formacion_id')->references('id')->on('formacions');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabajadors');
    }
};
