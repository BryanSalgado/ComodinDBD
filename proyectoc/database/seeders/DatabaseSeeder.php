<?php

namespace Database\Seeders;
use App\Models\Registro;
use App\Models\Sucursal;
use App\Models\Auto;
use App\Models\Pais;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::factory(3)->create();
        Registro::factory(20)->create();
    }
}
