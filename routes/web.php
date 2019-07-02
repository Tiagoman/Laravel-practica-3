<?php

use app\Actor;
use app\Movie;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/miPrimerRuta', function() {
  return "cree mi primer ruta en Laravel";
});

Route::get('/resultado/{numero}', function($numero) {
  if ($numero%2==0){
    return "el numero es par";
  } else {
    return "el numero es impar";
  }
});


Route::get('/resultado/{numero}/{opcional?}', function($numero, $opcional = null) {
  if ($opcional == null){
    if ($numero%2==0){
      return "el numero es par";
    } else {
      return "el numero es impar";
    }
  } else {
    return $opcional * $numero;
  }
  }
);


Route::get("/movies/detail/{id}", "MoviesController@SearchMovieById");

Route::get("/movies/find/{name}", "MoviesController@findMovieByName");

Route::get("/actors", "ActorsController@index");

Route::get("/moviesFull", "MoviesController@index");

Route::get("/movies", "MoviesController@create");
Route::post("/movies", "MoviesController@store");


Route::get("/actors/add", "ActorsController@create");
Route::post("/actors/add", "ActorsController@store");
