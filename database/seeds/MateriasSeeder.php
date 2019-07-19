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
        DB::table('materias')->insert([
            'nombre' => 'Redes',

        ]);

        DB::table('materias')->insert([
            'nombre' => 'Fisica',

        ]);

        DB::table('materias')->insert([
            'nombre' => 'Quimica',

        ]);
    }
}
