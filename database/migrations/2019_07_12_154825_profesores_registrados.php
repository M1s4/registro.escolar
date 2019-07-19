<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfesoresRegistrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros', function (Blueprint $table) {
            $table->primary('id_maestro');
            $table->string('nombre');
            $table->timestamp('ciclo_escolar');
            $table->integer('password');    
            $table->integer('id_cicloP');
            $table->foreign('id_cicloP')->references('id_ciclo')->in('ciclo'); 
            $table->integer('id_materiaM');
            $table->foreign('id_materiaM')->references('id_materia')->in('materias'); 
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maestros');
    }
}
