<?php

use Illuminate\Support\Facades\Route;
use App\Models\Livre;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
// -- page d'accueil
Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

// -- liste des livres
Route::get('/liste', function () {
    $livres = Livre::get();
    return view('liste_livres',["livres"=>$livres]);
})->name('liste');

// -- liste des livres du user connecté
Route::get('/meslivres', function () {
    $livres = Livre::get();
    return view('meslivres',["livres"=>$livres] );
})->name('meslivres');

// -- ajout d'un livre : affichage du formulaire
Route::get('/ajouter', function () {
    return view('ajout_livre');
})->name('ajouter');

Route::post('/ajout', function (Request $request) {
    $mess="";
    $livres = new Livre; // nouvel objet instance du modèle
    $livres->titre =$request->input('titre') ; // définition des propriétés
    $livres->resume =$request->input('resume'); // définition des propriétés
    $livres->prix =$request->input('prix'); // définition des propriétés
    $livres->save()? $mess ="Livre ajouté" : $mess ="Problème lors de l'ajout"; // sauvegarde dans la BD Insert into
    return view('accueil',["message"=>$mess]);
});


// -- recherche de livres à partir d'un mot clé
Route::get('/recherche', function (Request $request) {
    $livres = Livre::where("titre","like","%".$request->input('search')."%")->get();
    return view('resultat_recherche',["livres"=>$livres]);
})->name('recherche');

Route::get("/modifier", function(Request $request) {
    $livre = Livre::where("id", "=", $request->input("id"))->first();
    return view("modifier_livre", ["livre"=>$livre]);
})->name("modifier");

Route::post('/modifValid', function (Request $request) {
    $mess="";
    $livres = Livre::find($request->input("id")); // nouvel objet instance du modèle
    $livres->titre =$request->input('titre') ; // définition des propriétés
    $livres->resume =$request->input('resume'); // définition des propriétés
    $livres->prix =$request->input('prix'); // définition des propriétés
    $livres->update()? $mess ="Livre modifié" : $mess ="Problème lors de la modification"; // sauvegarde dans la BD Insert into
    return redirect()->route('meslivres')->with('message', $mess);
 // à la methode with() crée la variable de session 'message' qui contient la valeur de $mess
 // à il faut modifier la vue « index » pour afficher 'session("message")' si cela existe
 // à {{ $message ?? (session('message') ?? '') }

});
Route::get('/supprimer', function (Request $request) {
    $mess="";
    $livres = Livre::find($request->input("id")); // produit where id=1
    $livres->delete()? $mess ="Livre supprimé" : $mess="Problème lors de la suppression";
    return redirect()->route('meslivres')->with('message', $mess);
    // à la methode with() crée la variable de session 'message' qui contient la valeur de $mess
    // à il faut modifier la vue « index » pour afficher 'session("message")' si cela existe
    // à {{ $message ?? (session('message') ?? '') }
})->name("supprimer");