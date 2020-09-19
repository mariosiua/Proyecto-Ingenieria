<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle__cursos', function (Blueprint $table) {
            $table->primary('codigo_detallado');
            $table->integer('anno');
            $table->string('periodo');
            $table->integer('num_periodo');
            $table->date('hora_inicio');
            $table->date('hora_final');
            $table->string('dia');
            $table->foreign('Tutor_Persona_Cedula')->references('Persona_cedula')->on('tutors');
            $table->foreign('Codigo_curso')->references('codigo')->on('cursos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle__cursos');
    }
}
