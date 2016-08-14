<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //
    public function getHome(){
    	//return view('home', array('cont' => 'variable_prueba'));
    	return redirect()->action('CatalogController@getIndex');
    }
}
