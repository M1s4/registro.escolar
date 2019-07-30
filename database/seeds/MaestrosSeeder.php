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
        DB::table('profesor')->insert([
            'nombre' => 'Padilla',

        ]);

        DB::table('profesor')->insert([
            'nombre' => 'Ramos',

        ]);

        DB::table('profesor')->insert([
            'nombre' => 'Ernesto',

        ]);
    }
}
