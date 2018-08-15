<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Respuestas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->increments('idRespuesta');
            $table->string('genero');
            $table->string('titulo');
            $table->string('tipoPregunta');
            $table->text('respuesta');

            $table->unsignedInteger('idPregunta');
            $table->foreign('idPregunta')->references('idPregunta')->on('preguntas');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuestas');
    }
}
