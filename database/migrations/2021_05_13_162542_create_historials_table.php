<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historials', function (Blueprint $table) {
          $table->id();
          $table->double('actividad1', 8, 3);
          $table->double('actividad2', 8, 3);
          $table->double('examen', 8, 3);
          $table->double('recuperacion', 8, 3);
          $table->integer('profesor');
          $table->integer('seccion');
          $table->integer('turno');
          $table->integer('curso');
          $table->integer('alumno');
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
        Schema::dropIfExists('historials');
    }
}
