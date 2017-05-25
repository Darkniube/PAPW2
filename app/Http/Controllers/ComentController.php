<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ComentCreateRequest;

class ComentController extends Controller
{
    public function index()
    {
    }

    public function store(ComentCreateRequest $request)
    {
    	\App\Coment::create([
    		'texto' => $request['texto'],
    		'iduser' => '1',
    		'idreview' =>$request['idreview'],
    		]);

        $result = \App\Review::where('idreview', $request['idreview'])->get();
        $coments = \App\Coment::select('u_imagen','name','idcoment','texto','coment.created_at')->join('users', 'coment.iduser', '=', 'users.iduser')->where('idreview', $request['idreview'])->get();
        $generos = \App\Genre::all(); 
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();
        
        return view( 'vresena', ['result'=>$result, 'coments'=>$coments, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }
}
