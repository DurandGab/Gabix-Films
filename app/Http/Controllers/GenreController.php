<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;
class GenreController extends Controller
{
    public function listGenres(Request $request){
        $genres = Genre::select("nom_genre","id_genre")->get();
   
    return response()->json($genres);
}
}
