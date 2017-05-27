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
        $resenas = \App\Review::join('users', 'review.iduser', '=', 'users.iduser')->orderBy('idreview','desc')->paginate(4);
          
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
            'iduser'=>$request['idreview'],
            'idgenre'=>$request['genero'],
            'anio'=>$request['year'],
            'r_imagen'=>$file_route,
    		]);

        Storage::disk('posters')->put($file_route, \file_get_contents($img->getRealPath()));

    	        $resenas = \App\Review::join('users', 'review.iduser', '=', 'users.iduser')->orderBy('idreview','desc')->paginate(4);
          
        //return response()->json( $resenas );
        $generos = \App\Genre::all();
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();
        return view('resena', ['resenas' => $resenas, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);   
    }

    public function show($id)
    {
        $result = \App\Review::join('genre', 'review.idgenre', '=', 'genre.idgenre')->join('users', 'users.iduser', '=', 'review.iduser')->where('idreview', $id)->get();
        $coments = \App\Coment::select('u_imagen','name','idcoment','texto','coment.created_at')->join('users', 'coment.iduser', '=', 'users.iduser')->where('idreview', $id)->get();
        $generos = \App\Genre::all(); 
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();

        return view( 'vresena', ['result'=>$result, 'coments'=>$coments, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }

    public function update($id, Request $request)
    {   
        $resenas = \App\Review::where('idreview', $id)->first();
        
        $img = $request->file('imagen2');
        if($img!=NULL)
        {
        $file_route = time().'_'.$img->getClientOriginalName();
         $resenas->r_imagen= $file_route;
        }
        $resenas->titulo = $request->titulo;
        $resenas->texto = $request->texto;
        $resenas->idgenre = $request->genero;
       

        $resenas->save();
        if($img!=NULL)
        {
        Storage::disk('posters')->put($file_route, \file_get_contents($img->getRealPath()));
        }
        $result = \App\Review::where('idreview', $id)->get();
        $coments = \App\Coment::select('u_imagen','name','idcoment','texto','coment.created_at')->join('users', 'coment.iduser', '=', 'users.iduser')->where('idreview', $id)->get();
        $generos = \App\Genre::all(); 
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();

        return view( 'vresena', ['result'=>$result, 'coments'=>$coments, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }

    public function destroy($id)
    {
        \App\Review::destroy($id);

        $resenas = \App\Review::join('users', 'review.iduser', '=', 'users.iduser')->orderBy('idreview','desc')->paginate(4);
          
        //return response()->json( $resenas );
        $generos = \App\Genre::all();
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();

        return view('resena', ['resenas' => $resenas, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);  
    }
}
