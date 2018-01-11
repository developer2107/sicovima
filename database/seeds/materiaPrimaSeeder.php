<?php

use Illuminate\Database\Seeder;

class materiaPrimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('materiaPrima')->insert([
        'nombre_MP' => 'Santa Ana',
        'tipo_MP' => 'Lona',
        'color_MP' => 'Rojo',
        'precio_MP' => 2.30,
        'unidadMedida_MP' => 'Santa Ana',
        'estado_MP' => 1, //0 = defectuoso, 1= Bueno
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('materiaPrima')->insert([
        'nombre_MP' => 'Santa Ana',
        'tipo_MP' => 'Lona',
        'color_MP' => 'Rojo',
        'precio_MP' => 2.30,
        'unidadMedida_MP' => 'Santa Ana',
        'estado_MP' => 0, //0 = defectuoso, 1= Bueno
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
    }
}
