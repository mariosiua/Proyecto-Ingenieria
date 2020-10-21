<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->date('hora_inicio');
            $table->date('hora_final')->nullable();
            $table->date('fecha');
            $table->foreign('aula_codigo')->references('codigo')->on('aulas');
            $table->foreign('detalle_curso_codigo_detallado')->references('codigo_detallado')->on('detalle__cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
}
