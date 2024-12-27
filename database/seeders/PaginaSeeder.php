<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Str;
use Faker\Factory as Faker; 

class PaginaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('misvis')->insert([
            'name' => $faker->text,
            'image' => $faker->url
        ]);
        
        /*DB::table('servicios')->insert([
            'titulo' => $faker->text,
            'descripcion' => $faker->text,
            'servicioURL' => $faker->url
        ]);
        
        DB::table('redes')->insert([
            'url' => $faker->url
        ]);
        
        DB::table('imagenes')->insert([
            'imgURL' => $faker->url
        ]);
        
        DB::table('categorias')->insert([
            'nombreCT' => $faker->name
        ]);*/
    }
}
