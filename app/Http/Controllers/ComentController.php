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

    	return "comentario insertado";
    }
}
