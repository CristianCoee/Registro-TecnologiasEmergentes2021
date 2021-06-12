<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeccionAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seccion_asignaturas', function (Blueprint $table) {
            $table->id();
            $table->integer('seccion');
            $table->integer('turno');
            $table->integer('curso');
            $table->integer('asignatura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seccion_asignaturas');
    }
}
