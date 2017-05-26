<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\User;
use Auth;
use Storage;


class UserController extends Controller
{
	public function index()
    {
    }

    public function create()
    {
    	return view('usuario.create');
    }

    public function store(UserCreateRequest $request)
    {

        $img = $request->file('imagen');
        $file_route = time().'_'.$img->getClientOriginalName();

    	\App\User::create([
    		'name'=> $request['name'],
    		'email'=> $request['email'],
            'gender'=>$request['gender'],
            'birthday'=>$request['year'].'-'.$request['day'].'-'.$request['month'],
            'u_imagen'=>$file_route,
    		'password'=> bcrypt($request['pass']),
    		]);

        Storage::disk('perfil')->put($file_route, \file_get_contents($img->getRealPath()));

    	return view('login');
    }
}
