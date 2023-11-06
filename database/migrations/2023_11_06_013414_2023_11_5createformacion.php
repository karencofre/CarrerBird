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
        Schema::create('formacions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_formacion')->nullable();
            $table->string('lugar_formacion')->nullable();
            $table->string('grado_formacion')->nullable();
            $table->bigInteger('trabajador')->nullable();

            $table->foreign('trabajador')->references('trabajador_id')->on('trabajadors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formacions');
    }
};
