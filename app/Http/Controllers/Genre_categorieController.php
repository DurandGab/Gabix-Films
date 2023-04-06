<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre_categorie;
use Illuminate\Support\Facades\DB;
class Genre_categorieController extends Controller
{
    public function getListGenres($id_categorie){
            $genres=DB::table('genre_categorie')
            ->join('genre', 'genre.id_genre' ,'=', 'genre_categorie.id_genre')
            ->where("id_categorie", "=", $id_categorie)
            
            ->get();
            return response()->json($genres);
        
}
}