<?php

use Illuminate\Database\Seeder;

class AgregarAlumnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //Hacemos referencia a la tabla para poderle insertar datos de
    //forma harcodeada xD
        Users::create('students')->insert([
            'nombre'=> 'Misael Gutierrez',
            'edad'=>'26',
            'pass'=>bcrypt('12345'),



        ]);
    }
}
