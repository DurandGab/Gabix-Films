<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acteur;
use Illuminate\Support\Facades\DB;
class ActeurController extends Controller
{
    //suu
    public function listActeurs(Request $request){
        if($request->has("search")){
            $search = $request->search;
            $acteurs = Acteur::where("nom","like", "%".$search."%")->get();
        }else{
            $acteurs = Acteur::select("genre","nom")->get();
        }
       
        return response()->json($acteurs);
    }

    public function listActeursFilm($titre){
        $acteurs=DB::table('acteur')
        ->join('joue', 'joue.id_acteur' ,'=', 'acteur.id_acteur')
        ->where('titre', '=', $titre)
        ->get();
        return response()->json($acteurs);
    }

    public function ajoutActeur(Request $request){
        
        if ($ok) {
            return response()->json(["status" => 1, "message" => "film ajouté"],201);
        } else {
            return response()->json(["status" => 0, "message" => "pb lors de l'ajout"],400);
        } 
        }
}
