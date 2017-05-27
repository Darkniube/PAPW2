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
                <section class="col-xs-12 col-sm-12 col-md-12 col-lg-9 sinpadding">
                    <h3 class="text-w">Perfil</h3>
                    <hr class="line">
                    <div class="posts2 col-xs-12 col-md-12 col-lg-12">

                        <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 sinpadding">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sinpadding">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3  col-md-offset-3 col-lg-offset-3 sinpadding text-center">
                                <img class="img-thumbnail img-perfil" src="/images/perfil/{!!Auth::user()->u_imagen!!}" alt="">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 sinpadding text-center">
                                <h3 class="name">{!!Auth::user()->name!!}</h3>
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

                            <a href="{{URL::route('Resena.show',$perfil_ultima_resena->idreview)}}" class="thumb pull-left text-center">
                                <img class="img-thumbnail" src="/images/posters/{{$perfil_ultima_resena->r_imagen}}" alt="">
                            </a>
          
                            <h2 class="post-title text-center"> 
                                <a href="{{URL::route('Resena.show',$perfil_ultima_resena->idreview)}}">{{$perfil_ultima_resena->titulo}}</a>         
                            </h2>

                            <p>
                                <span class="post-fecha limitado2">{{$perfil_ultima_resena->created_at}} </span> por <span class="post-autor">"{{$perfil_ultima_resena->name}}"</span>
                            </p>
                       
                            <p class="post-contenido text-justify limitado">
                                {{$perfil_ultima_resena->texto}}"
                            </p>
                       
                            <div class="contenedor-botones">
                                {!!link_to_route('Resena.show','Leer mas',$perfil_ultima_resena->idreview, ['class'=>'btn btn-primary'])!!}
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

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-adjust"></span></div>
                                    {!!Form::select('gender', array('Masculino' => 'Masculino', 'Femenino' => 'Femenino'), null, ['class' => 'form-control'] )!!}
                                </div>
                            </div>

                                <div class="form-group fecha">
                        <h4 class="modal-text">Fecha de nacimiento:</h4>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sinpadding fn">

                                {!!Form::select('day', array('01' => '01','02' => '02','03' => '03','04' => '04','05' => '05','06' => '06','07' => '07','08'=> '08','09' => '09','10' => '10','11' => '11','12' => '12','13' => '13','14' => '14','15' => '15','16' => '16','17' => '17','18' => '18','19' => '19','20' => '20','21' => '21','22' => '22','23' => '23','24' => '24','25' => '25','26' => '26','27' => '27','28' => '28','29' => '29','30' => '30','31' => '31'), null, ['class' => 'form-control'] )!!}
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sinpadding fn">
                                {!!Form::select('month', array('01' => 'Enero','02' => 'Febrero','03' => 'Marzo','04' => 'Abril','05' => 'Mayo','06' => 'Junio','07' => 'Julio','08'=> 'Agosto','09' => 'Septiembre','10' => 'Octubre','11' => 'Noviembre','12' => 'Diciembre'), null, ['class' => 'form-control'] )!!}
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sinpadding fn">
                                {!!Form::select('year', array('2017' => '2017','2016' => '2016','2015' => '2015','2014' => '2014','2013' => '2013','2012' => '2012','2011' => '2011','2010' => '2010','2009' => '2009','2008' => '2008','2007' => '2007','2006' => '2006','2005' => '2005','2004' => '2004','2003' => '2003','2002' => '2002','2001' => '2001','2000' => '2000','1999' => '1999','1998' => '1998','1997' => '1997','1996' => '1996','1995' => '1995','1994' => '1994','1993' => '1993','1992' => '1992','1991' => '1991','1990' => '1990','1989' => '1989','1988' => '1988','1987' => '1987','1986' => '1986','1985' => '1985','1984' => '1984','1983' => '1983','1982' => '1982','1981' => '1981','1980' => '1980','1979' => '1979','1978' => '1978','1977' => '1977','1976' => '1976','1975' => '1975','1974' => '1974','1973' => '1973','1972' => '1972','1971' => '1971','1970' => '1970','1969' => '1969','1968' => '1968','1967' => '1967','1966' => '1966','1965' => '1965','1964' => '1964','1963' => '1963','1962' => '1962','1961' => '1961','1960' => '1960','1959' => '1959','1958' => '1958','1957' => '1957','1956' => '1956','1955' => '1955','1954' => '1954','1953' => '1953','1952' => '1952','1951' => '1951','1950' => '1950','1949' => '1949','1948' => '1948','1947' => '1947','1946' => '1946','1945' => '1945','1944' => '1944','1943' => '1943','1942' => '1942','1941' => '1941','1940' => '1940','1939' => '1939','1938' => '1938','1937' => '1937','1936' => '1936','1935' => '1935','1934' => '1934','1933' => '1933','1932' => '1932','1931' => '1931','1930' => '1930'), null, ['class' => 'form-control'] )!!}
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