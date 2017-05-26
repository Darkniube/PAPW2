<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" type="image/png" href="/images/logo2.png" />
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/sitioengeneral.css">
    @yield('estilos')
    
</head>
<body class="box">
    <div class="fondo">
        <div class="jumbotron">
            <section class="container fondologo">
                <img src="/images/logo.png" alt="" class="logo center-block">
            </section>
        </div>

        <header>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="/resena" class="navbar-brand sinpadding-top"><span><img src="/images/logo2.png" class="img-logo" alt=""></span></a>
                        <a href="/resena" class="navbar-brand">TAmovies</a>
                    </div>
   
                    <div class="navbar-collapse collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="/resena">Inicio</a></li>
                            @if (Auth::check())
                            <li><a href="#" data-toggle="modal" data-target="#nnoti">Agregar reseña</a></li>
                            @endif()
                        </ul>
        
                        <ul class="nav navbar-nav navbar-right"> 
                            
                            @if (Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  {!!Auth::user()->name!!}<b class="caret"></b>
                                 </a>
                                 <ul class="dropdown-menu">
                                    <li><a href="{{URL::route('Perfil.show',Auth::user()->iduser)}}">Perfil</a></li>
                                    <li><a href="/Logout">Salir</a></li>
                                </ul>
                            </li>
                            @else
                            <li><a href="/login">Iniciar sesion</a></li>
                            @endif()
                        </ul>
    
                        {!!Form::open(['route'=>'Resultados.store','Method'=>'GET','class'=>'navbar-form navbar-right'])!!}

                           {{ csrf_field() }}
    
                            <div class="form-group">
                                {!!Form::text('texto',null,['id'=>'texto','class'=>'form-control','´placeholder'=>'buscar...'])!!}
                            </div>   
                            
                             <div class="form-group">
                                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>    
                            </div>  

                        {!!Form::close()!!}

                    </div>    

                </div>
            </nav>
        </header>

   <!--Seccion de reseñas-->

        @yield('content')
                <section class="posts hidden-xs hidden-sm col-md-3 col-lg-3">
                    <h4 class="text-w"">Reseñas mas recientes</h4>
                    <aside> 
                        @foreach($ultima_resenas as $ultima_resena)
                        <a href="{{URL::route('Resena.show',$ultima_resena->idreview)}}" class="list-group-item">
                            <h4 class="list-group-item-heading">{{$ultima_resena->titulo}}</h4>
                            <p class="list-group-item-text limitado3">{{$ultima_resena->texto}}</p>
                        </a>
                        @endforeach()
                    </aside>
               </section>
            </div>
        </section>

        @if (Auth::check())
        <div class="modal fade" id="nnoti" tabindex="-1" role="dialog" arial-labelledly="myModalLabel" arial-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
  
                    <div class="modal-header"> 
      
                        <label class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></label>
                        <h2>Insertar reseña</h2>

                    </div>
                    <div class="modal-body"> 
                        {!!Form::open(['route'=>'Resena.store','method'=>'POST','files'=>true])!!}
                        {{ csrf_field() }}
                        
                            <div class="form-group">
                                <h4 class="modal-text">Titulo: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon colorF"><span class="glyphicon glyphicon-star"></span></div>
                                    {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control colorF2 colorear'])!!}
                                </div>
                            </div>

                            <div class="form-group">
                                <h4 class="modal-text">Genero: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon colorF "><span class="glyphicon glyphicon-star"></span></div>
                                    <select name="genero" id="genero" class="form-control colorF2">
                                        @foreach($generos as $genero)
                                            <option value="{{$genero->idgenre}}">{{$genero->nombre}}</option>
                                        @endforeach()
                                    </select>
                                 
                                </div>
                            </div>

                            <div class="form-group">
                                <h4 class="modal-text">Imagen:</h4>   
                                <div class="custom-input-file">
                                   <input type="file" id="imagen" name="imagen" class="input-file">
                                    <!--<input type="file" id="imagen" name="imagen" class="input-file">-->
                                    <image id="imagen-pre" name="imagen-pre" src="/images/image-icon2.png">
                                </div>

            
                            </div>

                            <div class="form-group">
                                <h4>Año:</h4>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sinpadding fn">
                                        {!!Form::select('year', array('2017' => '2017','2016' => '2016'), null, ['class' => 'form-control colorF2'] )!!}
                                </div>
                            </div>
                            
                            <div id="resena" class="form-group">
                                <h4 class="modal-text">Reseña: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon colorF"><span class="glyphicon glyphicon-pencil"></span></div>
                                    {!!Form::textarea('texto',null,['id'=>'texto','class'=>'form-control colorF2 colorear', 'rows'=>10])!!}
                                </div> 
                            </div>

                            {!!Form::hidden('idreview',Auth::user()->iduser)!!}

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg center-block">Guardar</button>
                            </div>
                         {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
@endif()
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/modal.js"></script>

@yield('script')
<body>
</html>