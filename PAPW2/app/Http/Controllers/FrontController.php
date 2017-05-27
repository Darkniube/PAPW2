<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FrontController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function resena(){
        return view('resena');
    }

    public function vresena(){
        return view('vresena');
    }

    public function resultados(){
        return view('resultados');
    }

    public function perfil(){
        return view('perfil');
    }
}
