<?php

use Illuminate\Database\Seeder;

class usersroles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $roles = DB::select('SELECT id_rol FROM rol WHERE nombre_rol="Estudiante"');
     dd($roles);
        DB::table('usersroles')->insert([
            'nombre_rol' => 'Estudiante',

        ]);
    }
}
