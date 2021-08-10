<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comidas')->insert(['nombre' => 'Arroz con Camarones', 'precio' => 3500]);
        DB::table('comidas')->insert(['nombre' => 'Sopa Azteca', 'precio' => 2500]);
        DB::table('comidas')->insert(['nombre' => 'Rice & Beans', 'precio' => 5000]);
        DB::table('comidas')->insert(['nombre' => 'Pizza', 'precio' => 3500]);
        DB::table('comidas')->insert(['nombre' => 'Gallo Pinto', 'precio' => 2000]);
        DB::table('comidas')->insert(['nombre' => 'Hamburguesa', 'precio' => 3200]);
        DB::table('comidas')->insert(['nombre' => 'Nachos', 'precio' => 3500]);
        DB::table('comidas')->insert(['nombre' => 'Estuche', 'precio' => 3700]);
        DB::table('comidas')->insert(['nombre' => 'Pollo', 'precio' => 1500]);
        DB::table('comidas')->insert(['nombre' => 'Papa Nachos', 'precio' => 2700]);
        DB::table('comidas')->insert(['nombre' => 'Arroz con Camarones', 'precio' => 3500]);
        DB::table('comidas')->insert(['nombre' => 'Dedos de Pollo', 'precio' => 2000]);

    }
}
