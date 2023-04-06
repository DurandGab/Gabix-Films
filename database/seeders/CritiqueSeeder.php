<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CritiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('critique')->insert([
            'titre' => 'Titanic',
            'id_utilisateur' => '1',
            'commentaire' => 'tres bon film, tres romantique',
            'note' => '4.5'
        ]);
    }
}
