<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joue;
use App\Models\Acteur;
use Illuminate\Support\Facades\DB;
class JoueController extends Controller
{
    // public function getActeur($id_acteur){
    //     if($acteur = Joue::find($id_acteur)){
    //     $acteur=DB::table('joue')
    //     //->join('categories', 'categories.cléprimaire' ,'=', 'film.cléétrangère')
    //     ->join('acteur', 'acteur.id_acteur', '=', 'joue.id_acteur')
    //     ->where("id_acteur", "=", $id_acteur)
    //     ->get();
            
    //         return response()->json($acteur);
    //     }else{
    //         return response()->json(["status" => 2, "message" => "l'acteur ne joue pas dans ce film"],404);
    //     }
    //     }

    }