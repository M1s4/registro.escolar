<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MateriasParaRegistro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function($table) {
            $table->increments('id_materia', true);
            $table->string('nombre_materia');
            $table->integer('id_cicloA');
            $table->foreign('id_cicloA')->references('id_ciclo')->on('ciclo'); 

           
        });
    
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
