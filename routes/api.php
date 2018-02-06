<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

///////////////////////////////////////////////////////////////////////////

//route pour lister tous les utilisateurs
Route::get('users','UserController@api_index');

//route pour la vue sur un seul utilisateur
Route::get('user/{id}','UserController@api_show');

//route pour créer un utilisateur par l'api
Route::post('user','UserController@api_store');

//route pour la modification d'un utilisateur
Route::put('user','UserController@api_store');


//route pour supprimer un utilisateur
Route::delete('user/{id}', 'UserController@api_destroy');

///////////////////////////////////////////////////////////////////////////

//route pour lister toutes les catégories
Route::get('categories','CategoryController@api_index');

//route pour créer une catégorie par l'api
Route::post('category','CategoryController@api_store');

//route pour la modification d'une catégorie
Route::put('category','CategoryController@api_store');

//route pour la vue sur une seul catégorie
Route::get('category/{id}','CategoryController@api_show');

//route pour supprimer une catégorie
Route::delete('category/{id}', 'CategoryController@api_destroy');
