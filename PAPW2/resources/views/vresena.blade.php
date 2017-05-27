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

                            <div class="thumb text-center">
                                <img class="" src="/images/posters/{{$results->r_imagen}}" alt="">
                                <div class="text-left">
                                    <h4><span class="datos">Titulo: </span><span>{{$results->titulo}}</span></h4>
                                    <h4><span class="datos">Genero: </span><span>{{$results->nombre}}</span></h4>
                                    <h4><span class="datos">Año: </span><span>{{$results->anio}}</span></h4>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">

		                    <h2 class="post-title">"{{$results->titulo}}"</h2>
		  
		                    <p id="fecha-autor"><span class="post-fecha limitado2">{{$results->created_at}} </span> por<span class="post-autor"><b> {{$results->name}}</b></span></p>
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
                                {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group">
           	                     	        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                                            {!!Form::textarea('texto',null,['class'=>'form-control','rows'=>'3', 'col'=>'60'])!!}
                                            {{ Form::hidden('idreview', $results->idreview) }}
                                            {{ Form::hidden('iduser', Auth::user()->iduser) }}
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
                        {{ csrf_field() }}
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
                                <h4>Año:</h4>
                                         {!!Form::select('year', array('2017' => '2017','2016' => '2016','2015' => '2015','2014' => '2014','2013' => '2013','2012' => '2012','2011' => '2011','2010' => '2010','2009' => '2009','2008' => '2008','2007' => '2007','2006' => '2006','2005' => '2005','2004' => '2004','2003' => '2003','2002' => '2002','2001' => '2001','2000' => '2000','1999' => '1999','1998' => '1998','1997' => '1997','1996' => '1996','1995' => '1995','1994' => '1994','1993' => '1993','1992' => '1992','1991' => '1991','1990' => '1990','1989' => '1989','1988' => '1988','1987' => '1987','1986' => '1986','1985' => '1985','1984' => '1984','1983' => '1983','1982' => '1982','1981' => '1981','1980' => '1980','1979' => '1979','1978' => '1978','1977' => '1977','1976' => '1976','1975' => '1975','1974' => '1974','1973' => '1973','1972' => '1972','1971' => '1971','1970' => '1970','1969' => '1969','1968' => '1968','1967' => '1967','1966' => '1966','1965' => '1965','1964' => '1964','1963' => '1963','1962' => '1962','1961' => '1961','1960' => '1960','1959' => '1959','1958' => '1958','1957' => '1957','1956' => '1956','1955' => '1955','1954' => '1954','1953' => '1953','1952' => '1952','1951' => '1951','1950' => '1950','1949' => '1949','1948' => '1948','1947' => '1947','1946' => '1946','1945' => '1945','1944' => '1944','1943' => '1943','1942' => '1942','1941' => '1941','1940' => '1940','1939' => '1939','1938' => '1938','1937' => '1937','1936' => '1936','1935' => '1935','1934' => '1934','1933' => '1933','1932' => '1932','1931' => '1931','1930' => '1930'), null, ['class' => 'form-control colorF2'] )!!}
                        
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
                                    {{ csrf_field() }}
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
 