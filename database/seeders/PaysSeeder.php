<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pays')->insert([
            'id_pays' => '1',
            'nom_pays' => 'France'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '2',
            'nom_pays' => 'Nigeria'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '3',
            'nom_pays' => 'Inde'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '4',
            'nom_pays' => 'Etats Unis'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '5',
            'nom_pays' => 'Chine'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '6',
            'nom_pays' => 'Japon'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '7',
            'nom_pays' => 'Royaume Uni'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '8',
            'nom_pays' => 'Corée du Sud'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '9',
            'nom_pays' => 'Espagne'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '10',
            'nom_pays' => 'Allemagne'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '11',
            'nom_pays' => 'Italie'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '12',
            'nom_pays' => 'Argentine'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '13',
            'nom_pays' => 'Mexique'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '14',
            'nom_pays' => 'Turquie'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '15',
            'nom_pays' => 'Brésil'
        ]);
        DB::table('pays')->insert([
            'id_pays' => '16',
            'nom_pays' => 'Canada'
        ]);
    }
}
