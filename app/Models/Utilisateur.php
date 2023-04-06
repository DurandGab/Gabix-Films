<?php

use Illuminate\Database\Eloquent\Model;

/**
 * Class Utilisateur
 * 
 * @property string $id_utilisateur 
 * @property string $nom
 * @property string $prenom
 * @property string $mail
 * @property string $date_naiss
 * @property string $date_insc
 * @property string $mdp
 * @property string $admin
 * @property string $img_profil
 * 
 * @package App\Models
 */

class Utilisateur extends Model
{
    protected $table = "utilisateurs";

    protected $primaryKey = "id_utilisateur";

    protected $fillable = [
        "nom",
        "prenom",
        "mail",
        "date_naiss",
        "mdp",
        "img_profil"
    ];

}

