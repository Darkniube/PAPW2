@extends('layout.master2')

    @section('estilos')
        <link rel="stylesheet" type="text/css" href="/css/vresena.css">
    @stop

    @section('content')
        @foreach($result as $results)
        <section class="main container">
            <div class="row">
	            <div class="posts col-xs-12 col-sm-12 col-md-9 col-lg-9">
		            <div class="post clearfix"> 
                        
                         <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 sinpadding">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 sinpadding">

                            <div href="#" class="thumb text-center">
                                <img class="img-responsive" src="/images/posters/{{$results->r_imagen}}" alt="">
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

		                    <h2 class="post-title">"{{$results->titulo}}"</h2>
		  
		                    <p id="fecha-autor"><span class="post-fecha">26 de enero de 2015 </span>por <span class="post-autor"><b>{{$results->name}}</b></span></p>
		                    <p class="post-contenido text-justify"> 
                                {{$results->texto}}
                            </p>

                        </div>
                        </div>

                        @if (Auth::user()->iduser==$results->iduser)
                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 sinpadding">
                            <div id="post-re">
                                <h4 class="glyphicon glyphicon-pencil" id="post-edit-button" data-toggle="modal" data-target="#post-edit"></h4>
                                <h4 class="glyphicon glyphicon-remove" id="post-remove-button" data-toggle="modal" data-target="#post-dest"></h4>                     
                            </div>
                        </div>
                        @endif()
		            </div>

	                <h4 class="text-w">Comentarios</h4>
	                <div class="row">
                       <div class="col-lg-12">   
                            <div id="box-coment">
                                {!!Form::open(['route'=>'Comentario.store','method'=>'POST','class'=>'form-inline'])!!}
                                    <div class="form-group">
                                        <div class="input-group">
           	                     	        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                                            {!!Form::textarea('texto',null,['class'=>'form-control','rows'=>'3', 'col'=>'60'])!!}
                                            {{ Form::hidden('idreview', $results->idreview) }}
                                        </div>
                                    </div>   
                                    {!!Form::submit('comentar',['class'=>'btn btn-primary'])!!}
                                {!!Form::close()!!}
                            </div>
                        </div>  
                        
                        @foreach($coments as $coment)
                        <div id="coment" class="col-lg-12">
                            <div class="col-md-2 col-lg-2 sinpadding">
                                <div id="img-coment">
                                    <img class="img-responsive" src="/images/perfil/{{$coment->u_imagen}}" alt="">
                                </div>
                            </div>
	                  
	                        <div class="col-md-10 col-lg-10 sinpadding">
                                <div id="content-coment">
                                    <H4>{{$coment->name}}</H4>
                          	        <p class="text-justify">{{$coment->texto}}</p>
                                    <p class="text-justify">{{$coment->created_at}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach()
                    </div>
                </div>

                <div class="modal fade" id="post-edit" tabindex="-1" role="dialog" arial-labelledly="myModalLabel" arial-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
  
                            <div class="modal-header"> 
      
                                <label class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></label>
                                <h2 class="modal-text">Editar reseña</h2>

                            </div>
                    <div class="modal-body"> 
                        
                        {!!Form::model($results,['route'=>['Resena.update',$results->idreview],'method'=>'PUT','files'=>true])!!}
                            <div class="form-group">
                                <h4 class="modal-text">Titulo: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon colorF"><span class="glyphicon glyphicon-star"></span></div>
                                    {!!Form::text('titulo',null,['id'=>'titulo','class'=>'form-control colorF2'])!!}
                                </div>
                            </div>


                            <div class="form-group">
                                <h4 class="modal-text">Genero: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon colorF"><span class="glyphicon glyphicon-star"></span></div>
                                    <select name="genero" class="form-control colorF2">
                                        @foreach($generos as $genero)
                                            <option value="{{$genero->idgenre}}">{{$genero->nombre}}</option>
                                        @endforeach()
                                    </select>
                                 
                                </div>
                            </div>

                            <div class="form-group">
                                <h4 class="modal-text">Imagen:</h4>   
                                <div class="custom-input-file">
                                    {!!Form::file('imagen2',['id'=>'imagen2','class'=>'input-file'])!!}
                                    <image id="imagen-pre2" name="imagen-pre" src="/images/image-icon2.png">
                                    <output id="list"></output>
                                </div>
                            </div>          

                            <div class="form-group">
                                <h4 class="modal-text">Contenido: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon colorF"><span class="glyphicon glyphicon-pencil"></span></div>
                                    {!!Form::textarea('texto',null,['id'=>'texto','class'=>'form-control colorF2', 'rows'=>10])!!}
                                </div> 
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg center-block">Guardar</button>
                            </div>
                         {!!Form::close()!!}
                         
                    </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="post-dest" tabindex="-1" role="dialog" arial-labelledly="myModalLabel" arial-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
  
                            <div class="modal-header"> 
      
                                <label class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></label>
                                <h2 class="modal-text">Eliminar reseña</h2>

                            </div>
                            <div class="modal-body"> 
                                <h4 class="modal-text">Seguro que desea eliminar la reseña?</h4>

                                {!!Form::open(['route'=>['Resena.destroy',$results->idreview],'method'=>'DELETE','class'=>'form-inline'])!!}
                                    <div class="container-btn">
                                        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-5">
                                            {!!Form::submit('Cancelar',['data-dismiss'=>'modal','class'=>'btn btn-primary btn-lg center-block'])!!}
                                        </div>
                                        <div class="form-group col-xs-6 col-sm-6 col-md-6 col-lg-5">
                                            {!!Form::submit('Aceptar',['class'=>'btn btn-danger btn-lg center-block'])!!}
                                        </div>
                                    </div>
                                {!!Form::close()!!}         
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach()
    @stop
    @section('script')
     <script src="/js/vresena.js"></script>
    @stop
 