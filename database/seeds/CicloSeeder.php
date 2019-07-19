<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CicloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciclo')->insert([
            'nombre_ciclo' => '2019A',

        ]);

        DB::table('ciclo')->insert([
            'nombre_ciclo' => '2019B',

        ]);
    }
}
