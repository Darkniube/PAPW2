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

                {!!Form::open(['route'=>'Usuario.store', 'method'=>'POST'])!!}
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
                            {!!Form::text('pass',null,['id'=>'pass','class'=>'form-control', 'placeholder'=>'Contraseña','required'])!!}
                        </div>
                    </div>
           
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                            {!!Form::text('pass2',null,['id'=>'pass2','class'=>'form-control', 'placeholder'=>'Contraseña','required'])!!}
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
                            <select name="genero" class="form-control">
                                    <option disabled selected>Dia</option>
                                    <option value="01">1</option>
                                    <option value="02">2</option>
                                    <option value="03">3</option>
                                    <option value="04">4</option>
                                    <option value="05">5</option>
                                    <option value="06">6</option>
                                    <option value="07">7</option>
                                    <option value="08">8</option>
                                    <option value="09">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sinpadding fn">
                                <select name="genero" class="form-control">
                                    <option disabled selected>Mes</option>
                                    <option value="01">Enero</option>
                                    <option value="02">Febrero</option>
                                    <option value="03">Marzo</option>
                                    <option value="04">Abril</option>
                                    <option value="05">Mayo</option>
                                    <option value="06">Junio</option>
                                    <option value="07">Julio</option>
                                    <option value="08">Agosto</option>
                                    <option value="09">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </select>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 sinpadding fn">
                                <select name="genero" class="form-control">
                                    <option disabled selected>Año</option>

                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2008">2008</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>

                           </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <h4 class="modal-text">Imagen de perfil:</h4> 
                        <div class="input-group"> 
                            <div class="custom-input-file">
                                {!!Form::file('imagen',null,['id'=>'imagen','class'=>'input-file form-control'])!!}
                                    <!--<input type="file" id="imagen" name="imagen" class="input-file">
                                    <image id="imagen-pre" name="imagen-pre" src="images/image-icon.png">-->
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