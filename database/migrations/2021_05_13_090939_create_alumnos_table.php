<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('NIE');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono');
            $table->string('Sexo');
            $table->date('FNacimiento');
            $table->date('FIngreso');
            $table->string('Direccion');
            $table->string('Responsable');
            $table->string('Curso');
            $table->string('Estado');
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
        Schema::dropIfExists('alumnos');
    }
}
