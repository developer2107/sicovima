<?php

use Illuminate\Database\Seeder;

class municipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /**
       * Municipios de Ahuapachan
       */
      DB::table('municipio')->insert([
        'nombre_Muni' => 'Ahuapachan',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('municipio')->insert([
        'nombre_Muni' => 'Apaneca',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
      DB::table('municipio')->insert([
        'nombre_Muni' => 'Atiquizaya',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
      DB::table('municipio')->insert([
        'nombre_Muni' => 'Concepcion de Ataco',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
      DB::table('municipio')->insert([
        'nombre_Muni' => 'El Refugio',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
      DB::table('municipio')->insert([
        'nombre_Muni' => 'Guaymango',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
      DB::table('municipio')->insert([
        'nombre_Muni' => 'Jujutla',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('municipio')->insert([
        'nombre_Muni' => 'San Francisco Menendez',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('municipio')->insert([
        'nombre_Muni' => 'San Lorenzo',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);
      DB::table('municipio')->insert([
        'nombre_Muni' => 'San Pedro Puxtla',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('municipio')->insert([
        'nombre_Muni' => 'Tacuba',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      DB::table('municipio')->insert([
        'nombre_Muni' => 'Turin',
        'id_Departamento' => 1,
        'remember_token' => str_random(10),
        'created_at' => date('Y-m-d H:m:s'),
         'updated_at' => date('Y-m-d H:m:s')
      ]);

      /**
       * Municipio de Santa Ana
       */

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Candelaria de la Frontera',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Chalchuapa',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Coatepeque',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'El Congo',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'El Porvenir',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Masahuat',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Metapan',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'San Antonio Pajonal',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'San Sebastian Salitrillo',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Santa Ana',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Santa Rosa Guachipilin',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Santiago de la Frontera',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       DB::table('municipio')->insert([
         'nombre_Muni' => 'Texistepeque',
         'id_Departamento' => 2,
         'remember_token' => str_random(10),
         'created_at' => date('Y-m-d H:m:s'),
          'updated_at' => date('Y-m-d H:m:s')
       ]);

       /**
        * Municipio de Sonsonate
        */

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Acajutla',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Armenia',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Caluco',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Cuisnahuat',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Izalco',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Juayua',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Nahuizalco',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Nahulingo',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Salcoatitan',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'San Antonio del Monte',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'San Julian',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Santa Catarina Masahuat',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Santa Isabel Ishuatan',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Santo Domingo de Guzman',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Sonsonate',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        DB::table('municipio')->insert([
          'nombre_Muni' => 'Sonzacate',
          'id_Departamento' => 3,
          'remember_token' => str_random(10),
          'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ]);

        /**
         * Municipios de Usualutan
         */

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Alegria',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Berlin',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'California',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Concepcion Batres',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'El Triunfo',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Ereguayquin',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Estanzuelas',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Jiquilisco',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Jucuapa',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Jucuaran',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Mercedes Umaña',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Nueva Granada',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Ozatlan',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Puerto El Triunfo',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'San Agustin',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'San Buenaventura',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'San Dionisio',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'San Francisco Javier',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Santa Elena',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Santa Maria',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Santiago de Maria',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Tecapan',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         DB::table('municipio')->insert([
           'nombre_Muni' => 'Usualutan',
           'id_Departamento' => 4,
           'remember_token' => str_random(10),
           'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')
         ]);

         /**
          * Municipios de San Miguel
          */

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Carolina',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Chapeltique',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Chinameca',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Chirilagua',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Ciudad Barrios',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Comacaran',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'El Transito',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Lolotique',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Moncagua',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Nueva Guadalupe',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Nuevo Eden de San Juan',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Quelepa',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'San Antonio',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'San Gerardo',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'San Jorge',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'San Luis de la Reina',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'San Miguel',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'San Rafel Oriente',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Sesori',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          DB::table('municipio')->insert([
            'nombre_Muni' => 'Uluazapa',
            'id_Departamento' => 5,
            'remember_token' => str_random(10),
            'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
          ]);

          /**
           * Municipios de Morazan
           */

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Arambala',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Cacaopera',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Chilanga',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Corinto',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Delicias de Concepcion',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'El Divisadero',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'El Rosario',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Gualococti',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Guatajiagua',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Joateca',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Jocoaitique',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Jocoro',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Lolotiquillo',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Meanguera',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Osicala',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Perquin',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'San Carlos',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'San Fernando',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'San Francisco',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'San Isidro',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'San Simon',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Sensembra',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Sociedad',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Torola',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Yamabal',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('municipio')->insert([
             'nombre_Muni' => 'Yoloaiquin',
             'id_Departamento' => 6,
             'remember_token' => str_random(10),
             'created_at' => date('Y-m-d H:m:s'),
              'updated_at' => date('Y-m-d H:m:s')
           ]);

           /**
            * Municipios de La union
            */

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Anamoros',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Bolivar',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Conchagua',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Concepcion de Oriente',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'El Carmen',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'El Sauce',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Intipuca',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'La Union',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Lislique',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Meanguera del Golfo',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Nueva Esparta',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Pasaquina',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Poloros',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'San Alejo',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'San Jose',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Santa Rosa de Lima',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Yucuaiquin',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Yayantique',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            DB::table('municipio')->insert([
              'nombre_Muni' => 'Anamoros',
              'id_Departamento' => 7,
              'remember_token' => str_random(10),
              'created_at' => date('Y-m-d H:m:s'),
               'updated_at' => date('Y-m-d H:m:s')
            ]);

            /**
             * Municipios de La Libertad
             */

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Antiguo Cuscatlan',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Chiltiupan',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Ciudad Arce',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Colon',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Comasagua',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Huizucar',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Jayaque',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Jicalapa',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'La Libertad',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Santa Tecla',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Nuevo Cuscatlan',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'San Juan Opico',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Quezaltepeque',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Sacacoyo',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'San Jose Villanueva',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'San Matias',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'San Pablo Tacachico',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Talnique',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Tamanique',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Teotepeque',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Tepecoyo',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             DB::table('municipio')->insert([
               'nombre_Muni' => 'Zaragoza',
               'id_Departamento' => 8,
               'remember_token' => str_random(10),
               'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
             ]);

             /**
              * Municipios de Chalatenango
              */

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Agua Caliente',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Arcatao',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Azacualpa',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Cancasque',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Chalatenango',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Citala',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Comalapa',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Concepcion Quezaltepeque',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Dulce Nombre de Maria',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'El Carrizal',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'El Paraiso',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'La Laguna',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'La Palama',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'La Reina',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Las Flores',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Las Flores',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Las Vueltas',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Nombre de Jesus',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Nueva Concepcion',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Nueva Trinidad',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Ojos de Agua',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Potonico',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Antonio de la Cruz',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Antonio Los Ranchos',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Fernando',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Francisco Lempa',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Frnacisco Morazan',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Ignacio',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Isidro Labrador',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Luis del Carmen',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Miguel de Mercerdes',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'San Rafael',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Santa Rita',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              DB::table('municipio')->insert([
                'nombre_Muni' => 'Tejutla',
                'id_Departamento' => 9,
                'remember_token' => str_random(10),
                'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
              ]);

              /**
               * Municipios de Cuscatlan
               */

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Cojutepeque',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Candelaria',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'El Carmen',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'El Rosario',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Monte San Juan',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Oratorio de Concepcion',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'San Bartolome Perulapia',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'San Cristobal',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'San Jose Guayabal',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'San Pedro Perulapan',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'San Rafael Cedros',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'San Ramon',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Santa Cruz Analquito',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Santa Cruz Michapa',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Suchitoto',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               DB::table('municipio')->insert([
                 'nombre_Muni' => 'Tenancingo',
                 'id_Departamento' => 10,
                 'remember_token' => str_random(10),
                 'created_at' => date('Y-m-d H:m:s'),
                  'updated_at' => date('Y-m-d H:m:s')
               ]);

               /**
                * Municipios de San Salvador
                */

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Aguilares',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Apopa',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Ayutuxtepeque',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Cuscatancingo',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Delgado',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'El Paisnal',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Guazapa',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Ilopango',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Mejicanos',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Nejapa',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Pachimalco',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Rosario de Mora',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'San Marcos',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'San Martin',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'San Salvador',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Santiago Texacuangos',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Santo Tomas',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Soyapango',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                DB::table('municipio')->insert([
                  'nombre_Muni' => 'Tonacatepeque',
                  'id_Departamento' => 11,
                  'remember_token' => str_random(10),
                  'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
                ]);

                /**
                 * Municipios de La paz
                 */

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Zacatecoluca',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Cuyultitan',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'El Rosario',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Jerusalen',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Mercedes La Ceiba',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Olocuilta',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Paraiso de Osorio',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Antonio Masahuat',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Emigdio',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Francisco Chinameca',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Pedro Masahuat',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Juan Nonualco',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Juan Talpa',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Juan Tepezontes',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Luis La Herradura',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Sa Luis Talpa',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'SAn Miguel Tepezontes',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Pedro Nonualco',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'San Rafael Obrajuelo',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Santa Maria Ostuma',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Santiago Nonualco',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 DB::table('municipio')->insert([
                   'nombre_Muni' => 'Tapalhuaca',
                   'id_Departamento' => 12,
                   'remember_token' => str_random(10),
                   'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s')
                 ]);

                 /**
                  * Municipios de Cabañas
                  */

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Cinquera',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Dolores',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Guacotecti',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Ilobasco',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Jutiapa',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'San Isidro',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Sensuntepeque',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Tejutepeque',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  DB::table('municipio')->insert([
                    'nombre_Muni' => 'Victoria',
                    'id_Departamento' => 13,
                    'remember_token' => str_random(10),
                    'created_at' => date('Y-m-d H:m:s'),
                     'updated_at' => date('Y-m-d H:m:s')
                  ]);

                  /**
                   * Municipios de San Vicente
                   */

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'Apastepeque',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'Guadalupe',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'San Cayetano Istepeque',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'San Esteban Catarina',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'San Ildefonso',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'San Lorenzo',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'San Sebastian',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'San Vicente',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'Santa Clara',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'Santo Domingo',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'Tecoluca',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'Tepetitan',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);

                   DB::table('municipio')->insert([
                     'nombre_Muni' => 'Verapaz',
                     'id_Departamento' => 14,
                     'remember_token' => str_random(10),
                     'created_at' => date('Y-m-d H:m:s'),
                      'updated_at' => date('Y-m-d H:m:s')
                   ]);
    }
}
