<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MaestrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maestros')->insert([
            'nombre' => 'Maestro_uno',

        ]);

        DB::table('maestros')->insert([
            'nombre' => 'Maestro_dos',

        ]);

        DB::table('maestros')->insert([
            'nombre' => 'Maestro_tres',

        ]);
    }
}
