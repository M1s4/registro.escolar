<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewMateriascicloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiasciclo', function (Blueprint $table) {
            //usamos el metodo en innob; 
             $table->engine = 'InnoDB';
 
             $table->bigIncrements('id');
             $table->integer('id_cicloM')->unsigned();
             $table->foreign('id_cicloM')->references('id_cicloescolar')->on('cicloEscolar'); 
             $table->integer('id_materiasM')->unsigned();
             $table->foreign('id_materiasM')->references('id_materias')->on('materias');
             $table->integer('id_profesorM')->unsigned();
             $table->foreign('id_profesorM')->references('id_profe')->on('profesor');  
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
        Schema::dropIfExists('materiasciclo');
    }
}
