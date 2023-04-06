<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('film')->delete();
        DB::table('genre')->insert([
            'id_genre' => '1',
            'nom_genre' => 'Musical'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '2',
            'nom_genre' => 'Drame'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '3',
            'nom_genre' => 'Comédie'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '4',
            'nom_genre' => 'Historique'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '5',
            'nom_genre' => 'Biographique'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '6',
            'nom_genre' => 'Dessin animé'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '7',
            'nom_genre' => 'Action'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '8',
            'nom_genre' => 'Policier'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '9',
            'nom_genre' => 'Horreur'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '10',
            'nom_genre' => 'Science fiction'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '11',
            'nom_genre' => 'Romantique'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '12',
            'nom_genre' => 'Documentaire'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '13',
            'nom_genre' => 'Fantastique'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '14',
            'nom_genre' => 'Aventure'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '15',
            'nom_genre' => 'Jeu TV'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '16',
            'nom_genre' => 'Télé réalité'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '17',
            'nom_genre' => 'Cuisine'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '18',
            'nom_genre' => 'Reportage'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '19',
            'nom_genre' => 'Info'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '20',
            'nom_genre' => 'Sport'
        ]);
        DB::table('genre')->insert([
            'id_genre' => '21',
            'nom_genre' => 'Autre'
        ]);
        
    }
}

