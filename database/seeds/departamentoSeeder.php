<?php

use Illuminate\Database\Seeder;

class departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //Zona Occidental
        DB::table('departamento')->insert([
          'nombre_Depa' => 'Santa Ana',
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('departamento')->insert([
          'nombre_Depa' => 'Sonsonate',
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);
        DB::table('departamento')->insert([
          'nombre_Depa' => 'Ahuapachan',
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        /**
         * Zona Oriental
         */

         DB::table('departamento')->insert([
           'nombre_Depa' => 'Usulutan',
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('departamento')->insert([
           'nombre_Depa' => 'San Miguel',
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('departamento')->insert([
           'nombre_Depa' => 'Morazan',
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('departamento')->insert([
           'nombre_Depa' => 'La Union',
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         /**
          * Zona Central
          */

          DB::table('departamento')->insert([
            'nombre_Depa' => 'La Libertad',
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('departamento')->insert([
            'nombre_Depa' => 'Chalatenango',
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('departamento')->insert([
            'nombre_Depa' => 'Cuscatlan',
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('departamento')->insert([
            'nombre_Depa' => 'San Salvador',
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          /**
           * Zona Paracentral
           */

           DB::table('departamento')->insert([
             'nombre_Depa' => 'La Paz',
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('departamento')->insert([
             'nombre_Depa' => 'Cabañas',
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('departamento')->insert([
             'nombre_Depa' => 'San Vicente',
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);
    }
}
