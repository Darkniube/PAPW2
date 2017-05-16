@extends('layout.master2')

    @section('estilos')
        <link rel="stylesheet" href="css/resena.css">
    @stop

    @section('content')
       <section class="main container">
            <div class="row">
                <section class="posts col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div id="ul-re">
                        <h3>Ultimas reseñas</h3>
                        <hr class="line">
                    </div>
                    
                    @foreach($resenas as $result)
                    <article class="post clearfix ">

                        <input type="hidden" value="{{$result->idreview}}" name="idUsuario">

                        <a href="{{URL::route('Resena.show',$result->idreview)}}" class="thumb pull-left">
                            <img class="img-thumbnail" src="images/posters/{{$result->r_imagen}}" alt="">
                        </a>
            
                        <h2 class="post-title"> 
                            <a href="/vresena">{{$result->titulo}}</a>         
                        </h2>

                        <p>
                            <span class="post-fecha">26 de enero de 2015 </span>por <span class="post-autor"><a href="#">Aldo</a></span>
                        </p>
                       
                        <p class="post-contenido text-justify">
                            {{$result->texto}}
                        </p>

                       
                        <div class="contenedor-botones">
                        {!!link_to_route('Resena.show','Leer mas',$result->idreview, ['class'=>'btn btn-primary'])!!}
                        <button type="button" class="btn btn-success">Comentarios <span class="badge">2</span></button>
                        </div>

                    </article>
                    @endforeach

                    <nav>
                        <div class="center-block">
                            <ul class="pagination">
                                {!!$resenas->render()!!}
                                <!--<li><a href='resena.php?pagina=1'>&laquo</a></li>
                                <li><a href='resena.php?pagina=".$anterior."'>Anterior</a></li>       
                                <li class='active'><a href='resena.php?pagina=".$i.";'>"1"</a></li>
                                <li><a href='resena.php?pagina=".$siguiente."'>Siguiente</a></li>
                                <li><a href='resena.php?pagina=".$total_paginas."'>&raquo</a></li>-->

                            </ul>
                        </div>
                    </nav>
    
                </section>
                @stop
                @section('script')
                <script src="js/resena.js"></script>

                @stop
