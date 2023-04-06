<?php

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pays
 * 
 * @property string $id_pays 
 * @property string $nom_pays
 * 
 * @package App\Models
 */

class Genre extends Model
{
    protected $table = "pays";

    protected $primaryKey = "id_pays";

}

