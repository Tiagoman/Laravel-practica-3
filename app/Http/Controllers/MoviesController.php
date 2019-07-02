<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
  public function SearchMovieById($id) {
  $peliculas = [
        1 => "Toy Story",
        2 => "Buscando a Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episodio V",
        5 => "Up",
        6 => "Mary and Max"
      ];
      return $peliculas[$id];
    }

    public function findMovieByName($name){
      $peliculas = [
            1 => "Toy Story",
            2 => "Buscando a Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episodio V",
            5 => "Up",
            6 => "Mary and Max"
          ];
          return view("movies", compact('peliculas'));
    }


    public function index()
    {
      $movies = Movie::all();
        return view("Movies.index", compact("movies"));
    }

    public function create ()
    {
      return view ('Movies.agregarPelicula');
    }


    public function store(Request $request)
    {
      $request->validate([
          'titulo' => 'required',
          'rating' => 'required',
          'premios' => 'required',
          'duracion' => 'required',
          'mes' => 'required',
          'dia' => 'required',
          'anio' => 'required'

      ]);
    }

}
