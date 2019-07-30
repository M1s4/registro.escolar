<?php

use Illuminate\Database\Seeder;

class RolesUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Forma de obtener los datos directamente en la bd, peligroso ya que permite el sql inyecction
        $rol = DB::select('SELECT id_rol FROM rol WHERE nombre_rol="Estudiante"');
        $user = DB::select('SELECT  id_usuario FROM usuarios WHERE email="misa@gmail.com"');
           */
     //Se pueden usar metodos dinamicos(en php son metodos magicos) directamente como "whereNombreRol" y laravel sabe que el argumento se llama "nombrerol" 
        $rol = DB::table('rol') 
        ->where ('nombre_rol', 'Estudiante') 
        ->value ('id_rol');

        $user = DB::table('usuarios') 
        ->where ('email', 'misa@gmail.com') 
        ->value ('id_usuario');
    
    
        DB::table('usersroles')->insert([
            'id_userR' => $rol,
             'id_rolR'  => $user,
        ]);
    
    
    }
}
