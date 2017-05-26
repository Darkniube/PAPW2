@extends('layout.master')

@section('titulo')
<title>Inicio</title>
@stop

@section('estilos')
<link rel="stylesheet" href="css/index.css">
@stop

@section('content')
  <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-12">
                <h1 class="text-center textP">TAMovies</h1>
            </div>

            <div class="info col-12-xs col-12-sm col-md-6 col-lg-6">
                <h2 class="text-center textP">Escribe y revive tu experiencia</h2>
                <h3 class="text-left textP animate ani1"><span class="glyphicon glyphicon-ok"></span> Mira miles de reseñas de tus peliculas favoritas</h3>
                <h3 class="text-left textP animate ani2"><span class="glyphicon glyphicon-ok"></span> O escribelas y dales tu valoracion </h3>
                <h3 class="text-left textP animate ani3"><span class="glyphicon glyphicon-ok"></span> Comenta tus opiniones</h3>
            </div>

            <div class="col-xs-12 col-md-4 col-lg-4 col-lg-offset-2 col-md-offset-2 registro">

                <h2 class="text-center textP">Crea tu cuenta ahora</h2>

                {!!Form::open(['route'=>'Usuario.store', 'method'=>'POST', 'files'=>true])!!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                           {!!Form::text('name',null,['id'=>'nombre','class'=>'form-control colorear', 'placeholder'=>'Nombre de usuario','required'])!!}
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span>@</span></div>
                            {!!Form::text('email',null,['id'=>'nombre','class'=>'form-control colorear', 'placeholder'=>'Correo electronico','required'])!!}
                        </div>
                    </div>
           
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            {!!Form::password('pass',['id'=>'pass','class'=>'form-control colorear', 'placeholder'=>'Contraseña','required'])!!}
                        </div>
                    </div>
           
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            {!!Form::password('pass2',['id'=>'pass2','class'=>'form-control colorear', 'placeholder'=>'Contraseña','required'])!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-adjust"></span></div>
                            {!!Form::select('gender', array('Masculino' => 'Masculino', 'Femenino' => 'Femenino'), null, ['class' => 'form-control'] )!!}
                         </div>
                    </div>

                    <div class="form-group">
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
                        <div class="input-group"> 
                            <div class="custom-input-file">
                                {!!Form::file('imagen',['id'=>'imagen','class'=>'input-file form-control'])!!}
                                    <!--<input type="file" id="imagen" name="imagen" class="input-file">-->
                                    <image id="imagen-pre" name="imagen-pre" src="images/image-icon.png">
                                <output id="list"></output>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                          {!!Form::submit('registro',['id'=>'registrar','class'=>'btn btn-primary btn-lg btn-block center-block'])!!} 
                    </div>

                {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop
@section('script')
<script src="js/index.js"></script>
@stop