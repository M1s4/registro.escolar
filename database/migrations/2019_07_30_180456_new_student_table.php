<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {

$table->unsignedInteger('id_student');
$table->unsignedInteger('id_materia');
$table->foreign('id_materia')->references('id_materias')->on('materias'); 
$table->unsignedInteger('iduser');
$table->foreign('iduser')->references('id_usuario')->on('usuarios');
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
        Schema::dropIfExists('student');
    }
}
