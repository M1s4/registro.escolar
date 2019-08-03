<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {

         \App\Materias::create([
             'nombre' => 'Redes',
         ]);

         \App\Materias::create([
            'nombre' => 'Fisica',
        ]);

        \App\Materias::create([
            'nombre' => 'Quimica',
        ]);

        \App\Materias::create([
            'nombre' => 'Algebra',
        ]);
        \App\Materias::create([
            'nombre' => 'Programacion',
        ]);

/*/
        DB::table('materias')->insert([
            'nombre' => 'Redes',

        ]);

        DB::table('materias')->insert([
            'nombre' => 'Fisica',

        ]);

        DB::table('materias')->insert([
            'nombre' => 'Quimica',

        ]);

        DB::table('materias')->insert([
            'nombre' => 'Algebra',

        ]);

        DB::table('materias')->insert([
            'nombre' => 'Programacion',

        ]);*/
    }
}
