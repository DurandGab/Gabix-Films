<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Acteur
 * 
 * @property string $id_acteur
 * @property string $nom
 * @property string $img_acteur
 * @property string $genre
 * @property string $date_naiss
 * @property string $biographie
 * @property string $id_pays
 * 
 * @package App\Models
 */

class Acteur extends Model
{
    protected $table = "acteur";

    protected $primaryKey = "id_acteur";
    public $incrementing =false;
    public $timestamps = false;
    protected $fillable = [
        "nom",
        "img_acteur",
        "genre",
        "date_naiss",
        "biographie",
        "id_pays"
    ];

}

