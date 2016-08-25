<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Movie;

class CatalogController extends Controller
{
    //
    public function getIndex(){
    	$movies = Movie::all();
    	return view('catalog.index', array('movies' => $movies));
    		//Para pasar un array a una vista, se debe asignar un nombre a dicha variable,
    		//esto se puede lograr tanto con la forma descrita arriba, como con la forma
    		//descrita a continuación:
    		//->with('arrayPeliculas', $this->arrayPeliculas);
    }

    public function getShow($id){
    	$movie = Movie::findOrFail($id);
    	return view('catalog.show')
    		->with('movie', $movie);
    }

    public function getCreate(){
    	return view('catalog.create');
    }

    public function getEdit($id){
    	$movie = Movie::findOrFail($id);
    	return view('catalog.edit', array('movie' => $movie));
    }

    public function postCreate(Request $request){
      $movie = new Movie;
      $movie->title = $request->input('title');
      $movie->year = $request->input('year');
      $movie->director = $request->input('director');
      $movie->poster = $request->input('poster');
      $movie->rented = 0;
      $movie->synopsis = $request->input('synopsis');
      $movie->save();
      return redirect('catalog');
    }

    public function putEdit(Request $request, $id){
      $movie = Movie::findOrFail($id);
      $movie->title = $request->input('title');
      $movie->year = $request->input('year');
      $movie->director = $request->input('director');
      $movie->poster = $request->input('poster');
      $movie->synopsis = $request->input('synopsis');
      $movie->save();
      return redirect('catalog');
    }
}
