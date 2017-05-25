<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use Storage;

class PerfilController extends Controller
{
        public function show($id)
    {
  
        $generos = \App\Genre::all(); 
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();
        $perfil_ultima_resenas = \App\Review::select('name','idreview','titulo','r_imagen','texto','users.created_at')->join('users', 'review.iduser', '=', 'users.iduser')->orderby('created_at','asc')->where('users.iduser', Auth::user()->iduser)->take(4)->get();

        return view( 'perfil', ['perfil_ultima_resenas'=>$perfil_ultima_resenas, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }

         public function update($id, Request $request)
    {   
    	$user = \App\User::where('iduser', $id)->first();

        $img = $request->file('imagen2');
        if($img!=NULL)
        {
        $file_route = time().'_'.$img->getClientOriginalName();
         $user->u_imagen= $file_route;
        }
        $user->name = $request->name;

        $user->save();
        if($img!=NULL)
        {
        Storage::disk('perfil')->put($file_route, \file_get_contents($img->getRealPath()));
        }

       $generos = \App\Genre::all(); 
        $ultima_resenas = \App\Review::orderby('created_at','DESC')->take(2)->get();
        $perfil_ultima_resenas = \App\Review::select('name','idreview','titulo','r_imagen','texto','users.created_at')->join('users', 'review.iduser', '=', 'users.iduser')->orderby('created_at','asc')->where('users.iduser', Auth::user()->iduser)->take(4)->get();

        return view( 'perfil', ['perfil_ultima_resenas'=>$perfil_ultima_resenas, 'generos' => $generos, 'ultima_resenas' => $ultima_resenas]);
    }
}
