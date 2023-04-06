<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Joue
 * 
 * @property string $titre 
 * @property string $id_acteur
 * 
 * @package App\Models
 */

class Joue extends Model
{
    protected $table = "joue";

    protected $primaryKey = "id_acteur";

    protected $fillable = [
        "titre",
        "id_acteur"
    ];
}


