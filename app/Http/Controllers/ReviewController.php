<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ReviewCreateRequest;
use App\Review;
use Storage;

class ReviewController extends Controller
{
    public function index()
    {   
        //$resenas =\App\Review::All();
        $resenas = \App\Review::orderBy('idreview')->paginate(3);
          
        //return response()->json( $resenas );
        $generos = \App\Genre::all();
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();

        return view('resena', ['resenas' => $resenas, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);   

    }

    public function store(ReviewCreateRequest $request)
    {
        $img = $request->file('imagen');
        $file_route = time().'_'.$img->getClientOriginalName();

    	\App\Review::create([
    		'titulo'=>$request['titulo'],
    		'texto'=>$request['texto'],
            'iduser'=>'1',
            'idgenre'=>$request['genero'],
            'r_imagen'=>$file_route,
    		]);

        Storage::disk('posters')->put($file_route, \file_get_contents($img->getRealPath()));

    	return "Reseña registrada";
    }

    public function show($id)
    {
        $result = \App\Review::where('idreview', $id)->get();
        $coments = \App\Coment::select('name','idcoment','texto','coment.created_at')->join('users', 'coment.iduser', '=', 'users.iduser')->where('idreview', $id)->get();
        $generos = \App\Genre::all(); 
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();

        return view( 'vresena', ['result'=>$result, 'coments'=>$coments, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }

    public function update($id, Request $request)
    {   
        $img = $request->file('imagen');
        $file_route = time().'_'.$img->getClientOriginalName();

        $resenas = \App\Review::where('idreview', $id)->first();
        $resenas->titulo = $request->titulo;
        $resenas->texto = $request->texto;
        $resenas->idgenre = $request->genero;
        $resenas->r_imagen= $file_route;

        $resenas->save();

        Storage::disk('posters')->put($file_route, \file_get_contents($img->getRealPath()));

        $result = \App\Review::where('idreview', $id)->get();
        $coments = \App\Coment::select('name','idcoment','texto','coment.create_at')->join('users', 'coment.iduser', '=', 'users.iduser')->where('idreview', $id)->get();
        $generos = \App\Genre::all(); 

        return view( 'vresena', ['result'=>$result, 'coments'=>$coments, 'generos' => $generos]);
    }

    public function destroy($id)
    {
        \App\Review::destroy($id);
    }
}
