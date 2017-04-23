<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;

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
    	\App\User::create([
    		'name'=> $request['name'],
    		'email'=> $request['email'],
            'gender'=>$request['gender'],
    		'password'=> bcrypt($request['pass']),
    		]);

    	return view('index');
    }
}
