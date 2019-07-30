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
        DB::table('cicloescolar')->insert([
            'nombre' => '2019A',

        ]);

        DB::table('cicloescolar')->insert([
            'nombre' => '2019B',

        ]);

        DB::table('cicloescolar')->insert([
            'nombre' => '2020A',

        ]);
        DB::table('cicloescolar')->insert([
            'nombre' => '2020B',

        ]);
    }
}
