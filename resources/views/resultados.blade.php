@extends('layout.master2')

    @section('estilos')
        <link rel="stylesheet" type="text/css" href="css/resultados.css">
    @stop
    
    @section('content')
        <section class="main container">
            <div class="row">
	            <section class="results col-xs-12 col-sm-12 col-md-9 col-lg-9">

                    <h2 class="text-center" id="result-head">Resultados</h2>
                    
                    @foreach($resultados as $resultado)
		            <article class="result clearfix center-block">

		                <a href="{{URL::route('Resena.show',$resultado->idreview)}}" class="thumb pull-left">
     	                    <img class="img-thumbnail" src="images/posters/{{$resultado->r_imagen}}" alt=""> 
                            
		                </a>
	   	  
		                <h2 class="result-title text-center">	
		                    <a href="{{URL::route('Resena.show',$resultado->idreview)}}">"{{$resultado->titulo}}"</a>	     
		                </h2>

		                <p>
		                    <span class="result-fecha limitado4">{{$resultado->texto}}</span> por <span class="result-autor"><a href="#">{{$resultado->name}}</a></span>
		                </p>

	                </article>
                    @endforeach()

                    <nav>
                        <div class="center-block">
                            <ul class="pagination">
    
                                {!!$resultados->render()!!}

                            </ul>
                        </div>
                    </nav>
	
	            </section>
    @stop