<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('film')->delete();
        DB::table('categories')->insert([
            'id_categorie' => '1',
            'nom_categorie' => 'Série'
        ]);
        DB::table('categories')->insert([
            'id_categorie' => '2',
            'nom_categorie' => 'Film'
        ]);
        DB::table('categories')->insert([
            'id_categorie' => '3',
            'nom_categorie' => 'Emission'
        ]);
        
    }
}

