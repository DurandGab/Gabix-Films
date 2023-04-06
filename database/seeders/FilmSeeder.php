<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('film')->delete();
        DB::table('film')->insert([
        'titre' => 'Titanic',
        'duree' => '03:14:00',
        'age_min' => 10,
        'synopsis' => 'Southampton, 10 avril 1912. Le paquebot le plus grand et le plus moderne du monde, réputé pour son insubmersibilité, le "Titanic", appareille pour son premier voyage. Quatre jours plus tard, il heurte un iceberg. A son bord, un artiste pauvre et une grande bourgeoise tombent amoureux.',
        'date_sortie' => '1997-01-07',
        'bande_annonce' => 'https://www.bing.com/videos/search?q=titanic&&view=detail&mid=2971142CA663A733BDB62971142CA663A733BDB6&&FORM=VRDGAR&ru=%2Fvideos%2Fsearch%3Fq%3Dtitanic%26FORM%3DHDRSC4',
        'realisateur' => 'James Camron',
        'logo' => 'https://www.bing.com/images/search?view=detailV2&ccid=OqH4vPLj&id=F28240CA0E92EB13342203E9F82E5CB5972675E0&thid=OIP.OqH4vPLjPGrgruv5o8tdngHaJ4&mediaurl=https%3a%2f%2fwww.tvguide.com%2fa%2fimg%2fcatalog%2fprovider%2f1%2f2%2f1-9050537522.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.3aa1f8bcf2e33c6ae0aeebf9a3cb5d9e%3frik%3d4HUml7VcLvjpAw%26pid%3dImgRaw%26r%3d0&exph=2880&expw=2160&q=titanic+film+affiche&simid=608053527168828851&FORM=IRPRST&ck=63D7EB94B24D574A1861792262865379&selectedIndex=0',
        'id_categorie' => '2',
        'id_genre' => '2',
        'id_utilisateur' => '1',
        'id_pays' => '4'
        ]);
        
    }
}
