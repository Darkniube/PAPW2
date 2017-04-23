<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReviewCreateRequest;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {   
        //$resenas =\App\Review::All();
        $resenas = \App\Review::orderBy('idreview')->paginate(3);
          
        //return response()->json( $resenas );
        $generos = \App\Genre::all();
        return view('resena', ['resenas' => $resenas, 'generos' => $generos]);   

    }

    public function store(ReviewCreateRequest $request)
    {
    	\App\Review::create([
    		'titulo'=>$request['titulo'],
    		'texto'=>$request['texto'],
            'iduser'=>'1',
            'idgenre'=>'1',
    		]);

    	return "Reseña registrada";
    }

    public function show($id)
    {
        $result = \App\Review::where('idreview', $id)->get();
        $coments = \App\Coment::select('name','idcoment','texto','coment.created_at')->join('users', 'coment.idcoment', '=', 'users.iduser')->where('idreview', $id)->get();
        $generos = \App\Genre::all(); 
        return view( 'vresena', ['result'=>$result, 'coments'=>$coments, 'generos' => $generos]);
    }

    public function update($id, Request $request)
    {
        $resenas = \App\Review::where('idreview', $id)->first();
        $resenas->titulo = $request->titulo;
        $resenas->texto = $request->texto;
        $resenas->save();

        $result = \App\Review::where('idreview', $id)->get();
        $coments = \App\Coment::where('idreview', $id)->get();
        return view( 'vresena', ['result'=>$result], ['coments'=>$coments]);
    }

    public function destroy($id)
    {
        \App\Review::destroy($id);
    }
}
