<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 * 
 * @property string $id_genre 
 * @property string $nom_genre
 * 
 * @package App\Models
 */

class Genre extends Model
{
    protected $table = "genre";

    protected $primaryKey = "id_genre";

}

