<?php

use App\Models\Permiso;
use Illuminate\Database\Seeder;

class TablaPermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Permiso::class, 50)->create(); //llama a PermisoFactory y crea 50 registros aleatorios
        factory(Permiso::class)->times(50)->create(); //llama a PermisoFactory y crea 50 registros aleatorios
    }
}
