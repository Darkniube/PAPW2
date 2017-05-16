@extends('layout.master')

@section('estilos')
<link rel="stylesheet" href="css/index.css">
@stop

@section('content')
  <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-12">
                <h1 class="text-center textP">TAMovies</h1>
            </div>

            <div class="info col-12-xs hidden-sm col-md-6 col-lg-6">
                <h2 class="text-center textP">Escribe y revive tu experiencia</h2>
                <h3 class="text-left textP animate ani1"><span class="glyphicon glyphicon-ok"></span> Mira miles de reseñas de tus peliculas favoritas</h3>
                <h3 class="text-left textP animate ani2"><span class="glyphicon glyphicon-ok"></span> O escribelas y dales tu valoracion </h3>
                <h3 class="text-left textP animate ani3"><span class="glyphicon glyphicon-ok"></span> Comenta tus opiniones</h3>
            </div>

            <div class="col-xs-12 col-md-4 col-lg-4 col-lg-offset-2 col-md-offset-2 registro">

                <h2 class="text-center textP">Crea tu cuenta ahora</h2>

                {!!Form::open(['route'=>'Usuario.store', 'method'=>'POST', 'files'=>true])!!}
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                           {!!Form::text('name',null,['id'=>'nombre','class'=>'form-control', 'placeholder'=>'Nombre de usuario','required'])!!}
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span>@</span></div>
                            {!!Form::text('email',null,['id'=>'nombre','class'=>'form-control', 'placeholder'=>'Correo electronico','required'])!!}
                        </div>
                    </div>
           
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            {!!Form::password('pass',['id'=>'pass','class'=>'form-control', 'placeholder'=>'Contraseña','required'])!!}
                        </div>
                    </div>
           
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            {!!Form::password('pass2',['id'=>'pass2','class'=>'form-control', 'placeholder'=>'Contraseña','required'])!!}
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
                                {!!Form::select('year', array('2017' => '2017','2016' => '2016'), null, ['class' => 'form-control'] )!!}
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
                          {!!Form::submit('registro',['class'=>'btn btn-primary btn-lg btn-block center-block'])!!} 
                    </div>

                {!!Form::close()!!}
            </div>
        </div>
    </div>
@stop
@section('script')
<script src="js/index.js"></script>
@stop