<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// -----------------------All the Routes GET-----------------------------------


//get all the movies on the app and we can search movies thanks to the titles of the movies
Route::get('/films', [App\Http\Controllers\FilmController::class, 'listFilms']);

//get all the actors on the app
Route::get('/acteurs', [App\Http\Controllers\ActeurController::class, 'listActeurs']);

//get one movie and all the information about this movie
Route::get('/films/{titre}', [App\Http\Controllers\FilmController::class, 'getFilm']);

// Get all the actors of a movie 
Route::get('/films/{titre}/acteurs', [App\Http\Controllers\ActeurController::class, 'listActeursFilm']);

// Get one actor and all the information about this actor
// Route::get('/films/{titre}/acteurs/{id_acteur}', [App\Http\Controllers\JoueController::class, 'getActeur']);

// Get the critics of one movie choosen 
Route::get('/films/{titre}/critiques', [App\Http\Controllers\CritiqueController::class, 'listCritique']);

// Get all the categories 
Route::get('/categories', [App\Http\Controllers\CategorieController::class, 'listCategories']);

// Get all the kinds of movies
Route::get('/genres', [App\Http\Controllers\GenreController::class, 'listGenres']);

// Get all the kinds of one categorie
Route::get('/categories/{id_categorie}', [App\Http\Controllers\Genre_categorieController::class, 'getListGenres']);

// -----------------------All the Routes POST-----------------------------------

//
Route::post('/films', [App\Http\Controllers\FilmController::class, 'ajoutFilm']);

//
Route::post('/films/{titre}/critique', [App\Http\Controllers\CritiqueController::class, 'ajoutCritique']);

// Faut que l'acteur s'ajoute dans un film
Route::post('/films/{titre}/acteur', [App\Http\Controllers\ActeurController::class, 'ajoutActeur']);


Route::post('/user', [App\Http\Controllers\UtilisateurController::class, 'findUser']);