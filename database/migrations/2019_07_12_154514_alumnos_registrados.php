<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlumnosRegistrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->unsignedInteger('id_alumno');
            $table->string('nombre');
            $table->timestamp('ciclo_escolar');
            $table->integer('password');
            $table->integer('id_cicloA');
            $table->foreign('id_cicloA')->references('id_ciclo')->on('ciclo');  
            $table->integer('id_materia');
            $table->foreign('id_materia')->references('id_materia')->on('materias'); 
         
                      
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
