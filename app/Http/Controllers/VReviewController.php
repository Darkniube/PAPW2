<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VReviewController extends Controller
{
    public function index()
    {   
        return view('vresena');     
    }

    public function show($idreview)
    {
    	$resena = \App\Review::select('titulo')->where('idreview', $idreview);
        return view('vresena', compact('resena')); 

    }

    public function show($id)
    {
        $result = \App\Review::all()->where('idreview',$id);
        return view( 'vresena', ['result'=>$result]);
    }
}
