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
            'nombre' => 'Estudiante',

        ]);

        DB::table('rol')->insert([
            'nombre' => 'Maestro',

        ]);
    }
}
