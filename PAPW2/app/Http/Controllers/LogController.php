<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Redirect;
use Auth;
use App\Http\Requests\LoginRequest;

class LogController extends Controller
{
    public function store(Request $request){
    	if(Auth::attempt(['email'=>$request['email'],'password'=>$request['pass']])){
           
           return Redirect::to('/resena');
            
    	}

    	return Redirect::to('/login');

    }

   public function logout(Request $request){
    	Auth::logout();

    	return Redirect::to('/login');

    }
}
