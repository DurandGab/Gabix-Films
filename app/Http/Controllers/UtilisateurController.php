<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;
class UtilisateurController extends Controller
{
    public function findUser(Request $request){
        $user = DB::table('utilisateurs')
        ->where('mail' ,'=', $request->mail)
        ->where('mdp' , '=' , $request->mdp)
        ->first();
        if($user) {
            return response()->json(["status" => 1, "user" => $user ]);
        }else{
            return response()->json(["status" => 0, "message" => "l'utilisateur n'existe pas"],404);
        }
    }
}
