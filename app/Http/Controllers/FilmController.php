<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;
// use App\Models\Joue;
class FilmController extends Controller
{
    public function listFilms(Request $request){
    if($request->has("search")){
        $search = $request->search;
        $films = DB::table("film")
        ->join('categories', 'categories.id_categorie' ,'=', 'film.id_categorie')
        ->join('genre', 'genre.id_genre', '=', 'film.id_genre')
        ->join('pays', 'pays.id_pays', '=', 'film.id_pays')
        ->where("titre","like", "%".$search."%")
        ->get();
    }else{
        $films = DB::table('film')
        ->join('categories', 'categories.id_categorie' ,'=', 'film.id_categorie')
        ->join('genre', 'genre.id_genre', '=', 'film.id_genre')
        ->join('pays', 'pays.id_pays', '=', 'film.id_pays')
        ->get();
    }
   
    return response()->json($films);
}
public function getFilm($titre){
    if ($film = Film::find($titre)){
    $film=DB::table('film')
        //->join('categories', 'categories.cléprimaire' ,'=', 'film.cléétrangère')
        ->join('categories', 'categories.id_categorie' ,'=', 'film.id_categorie')
        ->join('genre', 'genre.id_genre', '=', 'film.id_genre')
        ->join('pays', 'pays.id_pays', '=', 'film.id_pays')
        ->where("titre", "=", $titre)
        //->select("nom_pays", "nom_categorie", "nom_genre")
        ->first();
        
        
        return response()->json($film);
        }else{
            return response()->json(["status" => 2, "message" => "le film n'existe pas"],404);
        }
    }
    

public function ajoutFilm(Request $request){
    // $validator = Validator::make($request->all(),[
    //     'qte' => ['required','numeric'],
    //     'nom' => ['required', 'alpha']
    // ]);
    // if ($validator->fails()){
    //     return response()->json(["status"=> 0, "message"=> $validator->errors()],400);
    // }
    $film = new Film;
    $film->titre = $request->titre;
    $film->duree = $request->duree;
    $film->age_min = $request->age_min;
    $film->synopsis = $request->synopsis;
    $film->date_sortie = $request->date_sortie;
    $film->bande_annonce = $request->bande_annonce;
    $film->realisateur = $request->realisateur;
    $film->logo = $request->logo;
    $film->id_categorie = $request->id_categorie;
    $film->id_genre = $request->id_genre;
    $film->id_utilisateur = $request->id_utilisateur;
    $film->id_pays = $request->id_pays;
    $ok = $film->save();
    if ($ok) {
        return response()->json(["status" => 1, "message" => "film ajouté"],201);
    } else {
        return response()->json(["status" => 0, "message" => "pb lors de l'ajout"],400);
    } 
    }
}


