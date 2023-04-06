<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('acteur')->insert([
            'id_acteur' => '1',
            'nom' => 'Al Pacino',
            'genre' => 'Homme',
            'date_naiss' => '1940-01-01',
            'biographie' => 'Acteur, réalisateur, producteur et scénariste américain ',
            'id_pays' =>'4'
        ]);
        DB::table('acteur')->insert([
            'id_acteur' => '2',
            'nom' => 'Robert De Niro',
            'genre' => 'Homme',
            'date_naiss' => '1943-01-01',
            'biographie' => 'Acteur, artiste musical, réalisateur et producteur américain ',
            'id_pays' =>'4'
        ]);
        DB::table('acteur')->insert([
            'id_acteur' => '3',
            'nom' => 'Leonardo DiCaprio',
            'genre' => 'Homme',
            'date_naiss' => '1974-01-01',
            'biographie' => 'Acteur, producteur et scénariste américain ',
            'id_pays' =>'4'
        ]);
        
    }
}
