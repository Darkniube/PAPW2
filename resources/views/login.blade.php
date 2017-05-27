@extends('layout.master')

@section('titulo')
<title>Login</title>
@stop

@section('estilos')
    <link rel="stylesheet" href="css/login.css">
@stop

@section('content')
    <div class="container cont-login">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 center-block">
                <h1 class="text-center">TAmovies</h1>
                <div class="jumbotron login">
                    <h2 class="text-center textC"> Iniciar sesion </h2>
       
                    <hr></hr>

                    {!!Form::open(['route'=>'Log.store', 'method'=>'POST'])!!}
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                {!!Form::text('email',null,['id'=>'email','class'=>'form-control colorear3', 'placeholder'=>'correo usuario','required'])!!}
                            </div>
                        </div>
          
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                {!!Form::password('pass',['id'=>'pass','class'=>'form-control colorear3', 'placeholder'=>'contraseña','required'])!!}
                            </div>
                        </div>
          
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg center-block">Ingresar</button>
                        </div>

                        <div class="form-group">
                                <h4 class="textC text-center">No tienes cuenta? <a href="/">Registrate</a></h4>
                        </div>
                    {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
@stop