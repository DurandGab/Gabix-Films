<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Categorie;
class CategorieController extends Controller
{
    public function listCategories(Request $request){
            $categories = Categorie::select("nom_categorie","id_categorie")->get();
       
        return response()->json($categories);
    }

}
