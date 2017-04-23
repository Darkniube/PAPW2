<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResultsController extends Controller
{

	public function index(Request $Request)
    {
    	$text = $Request['texto'];
    	$resultados = \App\Review::join('users', 'review.iduser', '=', 'users.iduser')->where('titulo',"LIKE","%$text%")->orderBy('idreview')->paginate(2);
    	$generos = \App\Genre::all(); 
    	return view('resultados', ['resultados' => $resultados, 'generos' => $generos]);
    }

    public function store(Request $Request)
    {
    	$text = $Request['texto'];
    	$resultados = \App\Review::join('users', 'review.iduser', '=', 'users.iduser')->where('titulo',"LIKE","%$text%")->orderBy('idreview')->paginate(2);
    	$generos = \App\Genre::all(); 
    	return view('resultados', ['resultados' => $resultados, 'generos' => $generos]);
    }
}
