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
      DB::table('users')->insert([
        'name' => 'BrendaGuillen',
        'email' => 'brendacgmaradiaga@gmail.com',
        'password' => bcrypt('brenda12345'),
        'tipo' => 'Administrador',
        'estado' => 'Activo',
        'nombreUsuario_Usu' => 'Brenda Guillen',
        'fechaRegistro_Usu' => date('d-m-Y'),
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('users')->insert([
        'name' => 'Monterrosa',
        'email' => 'monterrosadelgado@gmail.com',
        'password' => bcrypt('monterrosa21'),
        'tipo' => 'Administrador',
        'estado' => 'Activo',
        'nombreUsuario_Usu' => 'Benjamin Monterrosa',
        'fechaRegistro_Usu' => date('d-m-Y'),
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('users')->insert([
        'name' => 'GreciaCastillo',
        'email' => 'grecihdez@gmail.com',
        'password' => bcrypt('grecia12345'),
        'tipo' => 'Administrador',
        'estado' => 'Activo',
        'nombreUsuario_Usu' => 'Grecia Castillo',
        'fechaRegistro_Usu' => date('d-m-Y'),
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
    }
}
