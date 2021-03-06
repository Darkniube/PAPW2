<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ResultsController extends Controller
{

	public function busqueda(Request $Request)
    {
    	$text = $Request['texto'];
    	$resultados = \App\Review::join('users', 'review.iduser', '=', 'users.iduser')->where('titulo',"LIKE","%$text%")->orWhere('review.created_at',"LIKE","%$text%")->orWhere('name',"LIKE","%$text%")->orderBy('idreview')->paginate(2);
    	$generos = \App\Genre::all();
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();
    	return view('resultados', ['resultados' => $resultados, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }

    public function store(Request $Request)
    {
    	$text = $Request['texto'];
    	$resultados = \App\Review::join('users', 'review.iduser', '=', 'users.iduser')->where('titulo',"LIKE","%$text%")->orWhere('review.created_at',"LIKE","%$text%")->orWhere('name',"LIKE","%$text%")->orderBy('idreview')->paginate(2);
    	$generos = \App\Genre::all(); 
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();

    	return view('resultados', ['resultados' => $resultados, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }
}
