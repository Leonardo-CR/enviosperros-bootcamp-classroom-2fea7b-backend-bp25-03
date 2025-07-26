<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //En este Seeder pondremos la data Base para nuestra aplicacion

        // Data para la tabla especies
        DB::table('especies')->insert([
            [
                'nombre' => 'Ave'
            ],
            [
                'nombre' => 'Canino'
            ],
            [
                'nombre' => 'Felino'
            ],
        ]);
        // Data para las vacunas
        DB::table('vacunas')->insert([
            [
                'nombre' => 'Puppy DP',
                'descripcion' => 'Moquillo y parvovirus'
            ],
            [
                'nombre' => 'Rabia',
                'descripcion' => 'Rabia'
            ],
            [
                'nombre' => 'Coronavirus canino',
                'descripcion' => 'Gastroenteritis viral'
            ],
            [
                'nombre' => 'Bordetella',
                'descripcion' => 'Tos de las perreras'
            ],
        ]);
        // Data para los veterinarios
        DB::table('veterinarios')->insert([
            [
                'nombre' => 'Juan Perez Ochoa',
                'email' => 'juan.po@gmail.com',
                'password' => bcrypt('password'),
                'lada' => '+52',
                'numero' => '2292219877',
            ],
            [
                'nombre' => 'Juana Flores Cruz',
                'email' => 'juana.fc@gmail.com',
                'password' => bcrypt('password'),
                'lada' => '+52',
                'numero' => '2293319447',
            ],
        ]);
        // Data para clientes (dueños de las mascotas)
        DB::table('users')->insert([
            [
                'name' => 'Leonardo Daniel Cruz Rosas',
                'email' => 'leonardo.rosas041024@gmail.com',
                'password' => bcrypt('password'),   
            ],
            [
                'name' => 'Juan Perez Mendez',
                'email' => 'juan.pm@gmail.com',
                'password' => bcrypt('password'),   
            ],
            [
                'name' => 'Daniel Mendez Lopez',
                'email' => 'dani1988@gmail.com',
                'password' => bcrypt('password'),   
            ],
            
        ]);
        // Data para mascotas
        DB::table('mascotas')->insert([
            [
                'nombre' => 'Croqueta',
                'fecha_nacimiento' => '2024-11-11',
                'peso' => 3.4,
                'raza' => 'Desconocida',
                'especie_id' => 2,
                'cliente_id' => 1,
            ], 
            [
                'nombre' => 'Niña',
                'fecha_nacimiento' => '2024-11-11',
                'peso' => 3.4,
                'raza' => 'Desconocida',
                'especie_id' => 2,
                'cliente_id' => 1,
            ], 
        ]);
        // Data para recetas medicas para mascotas
        
        // Data para citas

    }
}
