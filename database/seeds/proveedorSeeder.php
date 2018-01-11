<?php

use Illuminate\Database\Seeder;

class proveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('proveedor')->insert([
        'nombre_Prov' => 'Fulanito Garcia',
        'NIT_Prov' => '28993039-0',
        'tipoMercaderia_Prov' => 'lona',
        'direccion_Prov' => 2.30,
        'estado_Prov' => 1, //0 = inactivo, 1= activo
        'id_Municipio' => 77,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
    }
}
