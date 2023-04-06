<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Critique;
use Illuminate\Support\Facades\DB;
class CritiqueController extends Controller
{
    public function listCritique($titre){
        $critiques=DB::table('critique')
        ->where('titre', '=', $titre)
        ->get();
        return response()->json($critiques);
    }

    public function ajoutCritique(Request $request){
        // $validator = Validator::make($request->all(),[
        //     'qte' => ['required','numeric'],
        //     'nom' => ['required', 'alpha']
        // ]);
        // if ($validator->fails()){
        //     return response()->json(["status"=> 0, "message"=> $validator->errors()],400);
        // }
        $critique = new Critique;
        $critique->titre = $request->titre;
        $critique->id_utilisateur = $request->id_utilisateur;
        $critique->commentaire = $request->commentaire;
        $critique->note = $request->note;
        $critique->date_ajout = $request->date_ajout;
        
        $ok = $critique->save();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "Critique ajouté"],201);
        } else {
            return response()->json(["status" => 0, "message" => "pb lors de l'ajout"],400);
        } 
        }
}