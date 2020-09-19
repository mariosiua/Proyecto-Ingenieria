<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguimientos', function (Blueprint $table) {
            $table->primary('consecutivo');
            $table->increments('consecutivo');
            $table->string('descripcion');
            $table->foreign('Estudiante_Persona_cedula')->references('cedula')->on('personas');
            $table->date('Horario_hora_inicio');
            $table->string('Horario_dia');
            $table->date('Horario_hora_final');
            $table->foreign('Horario_Asesor')->references('id')->on('horarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seguimientos');
    }
}
