<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'nombre' => 'Misa',
            'password' => bcrypt('123456'),
            'email' => 'misa@gmail.com',
            ]);
        
            DB::table('usuarios')->insert([
                'nombre' => 'nombre_dos',
                'password' => bcrypt('123456'),
                'email' => 'dos@gmail.com',
                ]);
                
                DB::table('usuarios')->insert([
                    'nombre' => 'nombre_tres',
                    'password' => bcrypt('123456'),
                    'email' => 'tres@gmail.com',
                    ]);
    }


}
