<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Critique
 * 
 * @property string $titre 
 * @property string $id_utilisateur
 * @property string $commentaire
 * @property int $note
 * @property string $date_ajout
 * 
 * @package App\Models
 */

class Critique extends Model
{
    protected $table = "critique";

    protected $primaryKey =["titre", "id_utilisateur"];
    public $incrementing =false;
    public $timestamps = false;
    protected $fillable = [
        "commentaire",
        "note"
    ];

}

