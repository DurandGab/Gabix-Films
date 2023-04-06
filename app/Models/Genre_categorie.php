<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre_categorie
 * 
 * @property string $id_categorie
 * @property string $id_genre
 * 
 * @package App\Models
 */

class Genre_categorie extends Model
{
    protected $table = "genre_categorie";

    protected $primaryKey = "id_genre";

}

