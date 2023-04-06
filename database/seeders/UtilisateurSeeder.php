<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('utilisateurs')->insert([
            'id_utilisateur' => '1',
            'nom' => 'Durand',
            'prenom' => 'Gabin',
            'mail' => 'gabindx1@gmail.com',
            'date_naiss' => '1999/10/13',
            'mdp' => 'suuu',
            'admin' => '1',
            'img_profil' => 'img/profil_gabin.png'
        ]);
        
    }
}
