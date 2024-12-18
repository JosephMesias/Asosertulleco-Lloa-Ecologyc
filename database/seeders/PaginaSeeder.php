<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Suuport\Str;
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
        $faker = Faker::create();
        DB::table('informaciones')->insert([
            'logo' => $faker->url,
            'correo' => $faker->safeEmail,
            'telefono' => $faker->phoneNumber,
            'direccion' => $faker->text
        ]);
        
        DB::table('misvis')->insert([
            'texto' => $faker->text,
            'url' => $faker->url
        ]);
        
        DB::table('servicios')->insert([
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
        ]);
    }
}
