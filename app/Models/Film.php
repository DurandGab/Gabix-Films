<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Film
 * 
 * @property string $titre
 * @property string $duree
 * @property string $age_min
 * @property string $synopsis
 * @property string $date_sortie
 * @property string $bande_annonce
 * @property string $realisateur
 * @property string $logo
 * @property string $id_categorie
 * @property string $id_genre
 * @property string $id_utilisateur
 * @property string $id_pays
 * 
 * @package App\Models
 */

class Film extends Model
{
    protected $table = "film";

    protected $primaryKey = "titre";

    public $incrementing =false;
    public $timestamps = false;
    protected $fillable = [
        "titre",
        "duree",
        "age_min",
        "date_sortie",
        "bande_annonce",
        "realisateur",
        "logo",
        "id_categorie",
        "id_genre",
        "id_pays"
    ];

}
