<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewUserrolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersroles', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id_usersRoles');
            $table->integer('id_userR')->unsigned();
            $table->foreign('id_userR')->references('id_usuario')->on('usuarios'); 
            $table->integer('id_rolR')->unsigned();
            $table->foreign('id_rolR')->references('id_rol')->on('rol'); 
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
        Schema::dropIfExists('userroles');
    }
}
