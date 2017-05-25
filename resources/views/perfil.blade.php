@extends('layout.master2')

    @section('estilos')
        <link rel="stylesheet" href="/css/resena.css">
        <link rel="stylesheet" href="/css/perfil.css">
    @stop

    @section('content')
        <section class="main container">
            <div class="row">

                <section class="main container">
            <div class="row">
                <section class="col-xs-12 col-sm-12 col-md-9 col-lg-9 sinpadding">
                    <h3>Perfil</h3>
                    <hr class="line">
                    <div class="posts2 col-xs-12 col-md-12 col-lg-12">

                        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 sinpadding">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinpadding">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 sinpadding">
                                <img class="img-thumbnail img-perfil" src="/images/perfil/{!!Auth::user()->u_imagen!!}" alt="">
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 sinpadding">
                                <h3>{!!Auth::user()->name!!}</h3>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinpadding">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sinpadding text-center">
                                <p><h5>Correo: {!!Auth::user()->email!!}</h5></p>
                            </div>
                        
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sinpadding text-center">
                                <p><h5>Genero: {!!Auth::user()->gender!!}</h5></p>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 sinpadding text-center">
                                <p><h5>Fecha de nacimiento: {!!Auth::user()->birthday!!}</h5></p>
                            </div>
                        </div>
                        </div>

                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 sinpadding">
                            <div class="post-re">
                                <h4 class="glyphicon glyphicon-pencil" id="post-edit-button" data-toggle="modal" data-target="#perfil-edit"></h4>                
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinpadding">
                            <h3>Tus articulos recientes</h3>
                            <hr class="line">
                        </div>

                    @foreach($perfil_ultima_resenas as $perfil_ultima_resena)
                        <div class="mpost clearfix col-xs-12 col-md-6 col-lg-6">
                            <article class="post">  
                            <input type="hidden" value="{{$perfil_ultima_resena->idreview}}" name="idUsuario">

                            <a href="{{URL::route('Resena.show',$perfil_ultima_resena->idreview)}}" class="thumb pull-left">
                                <img class="img-thumbnail" src="/images/posters/{{$perfil_ultima_resena->r_imagen}}" alt="">
                            </a>
          
                            <h2 class="post-title"> 
                                <a href="{{URL::route('Resena.show',$perfil_ultima_resena->idreview)}}">{{$perfil_ultima_resena->titulo}}</a>         
                            </h2>

                            <p>
                                <span class="post-fecha">26 de enero de 2015 </span>por <span class="post-autor"><a href="#">{{$perfil_ultima_resena->name}}</a></span>
                            </p>
                       
                            <p class="post-contenido text-justify limitado">
                                 {{$perfil_ultima_resena->texto}}
                            </p>
                       
                            <div class="contenedor-botones">
                                {!!link_to_route('Resena.show','Leer mas',$perfil_ultima_resena->idreview, ['class'=>'btn btn-primary'])!!}
                                <button type="button" class="btn btn-success">Comentarios <span class="badge">2</span></button>
                            </div>
                            </article>
                        </div>
                    @endforeach
                      
                    </div>

                </section>

      
                @stop

                 <div class="modal fade" id="perfil-edit" tabindex="-1" role="dialog" arial-labelledly="myModalLabel" arial-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
  
                    <div class="modal-header"> 
      
                        <label class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></label>
                        <h2 class="modal-text">Editar informacion</h2>

                    </div>
                    <div class="modal-body"> 
                        {!!Form::model(Auth::user(),['route'=>['Perfil.update',Auth::user()->iduser],'method'=>'PUT','files'=>true])!!}
           
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>

                                    {!!Form::text('name',null,['value'=>Auth::user()->name,'id'=>'titulo','class'=>'form-control'])!!}
                                </div>
                            </div>

                            <!--<div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input class="form-control" type="password" id="contraactual" name="contra2" placeholder="Contraseña actual" required>
                                </div>
                            </div>
           
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input class="form-control" type="password" id="contra" name="contra" placeholder="Nueva contraseña" required>
                                </div>
                            </div>
           
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input class="form-control" type="password" id="contra2" name="contra2" placeholder="Repita la contraseña" required>
                                </div>
                            </div>-->
                        
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-adjust"></span></div>
                                    <select name="genero" class="form-control">
                                        <option disabled selected>Genero</option>
                                        <option value="Maculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <h4 class="modal-text">Imagen de perfil:</h4>   
                                <div class="custom-input-file">
            
                                    <input type="file" id="imagen2" name="imagen2" class="input-file">
                                    <img id="imagen-pre2" name="imagen-pre2" src="/images/perfil/{!!Auth::user()->u_imagen!!}">
                                    <output id="list"></output>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg center-block">Guardar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                @section('script')
                <script src="/js/perfil.js"></script>

                @stop