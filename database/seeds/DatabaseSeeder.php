<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MateriasSeeder::class);
        $this->call(RolSeeder::class);
        $this->call(MaestrosSeeder::class);
        $this->call(UsuarioSeeder::class);
        $this->call(CicloSeeder::class);
        $this->call(RolesUserSeeder::class);




    }
}
