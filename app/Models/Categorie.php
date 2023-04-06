<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Categorie
 * 
 * @property string $id_categorie 
 * @property string $nom_categorie
 * 
 * @package App\Models
 */

class Categorie extends Model
{
    protected $table = "categories";

    protected $primaryKey = "id_categorie";

}

