<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(departamentoSeeder::class);
        $this->call(municipioSeeder::class);
        $this->call(materiaPrimaSeeder::class);
        $this->call(proveedorSeeder::class);
        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
