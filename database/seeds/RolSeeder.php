<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre_rol' => 'Estudiante',

        ]);

        DB::table('rol')->insert([
            'nombre_rol' => 'Maestro',
           
        ]);
    }
}
