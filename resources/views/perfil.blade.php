@extends('layout.master2')

    @section('estilos')
        <link rel="stylesheet" href="css/resena.css">
        <link rel="stylesheet" href="css/perfil.css">
    @stop

    @section('content')
        <section class="main container">
            <div class="row">

                <section class="col-xs-12 col-sm-12 col-md-9 col-lg-9 sinpadding">
                    <h3>Perfil</h3>
                    <hr class="line">
                    
                    <div class="posts col-xs-12 col-md-12 col-lg-12">

                            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 sinpadding">
                                <img class="img-thumbnail img-perfil" src="images/maxresdefault.jpg" alt="">
                            </div>
                            <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                <h3>Aldo Roberto</h3>
                                <p><b>Correo:</b></p>
                                <p><b>Sexo:</b></p>
                                <p><b>Reseña mas comentada:</b></p>
                                <p><b>Reseñas escritas:</b></p>
                                <p><b>Reseñas comentadas:</b></p>
                                <p><b>Comentarios hechos:</b></p>
    
                            </div>


                        <h3>Articulos recientes</h3>
                        <hr class="line">

                        <div class="post clearfix col-xs-12 col-md-12 col-lg-12">

                            <a href=http://localhost:8070/Proyecto/vresena.php?resena='.$row["idnoticia"].' class="thumb pull-left">
                                <img class="img-thumbnail" src="images/maxresdefault.jpg" alt="">
                            </a>
          
                            <h2 class="post-title"> 
                                <a href="#">Creo que hoy llovera</a>         
                            </h2>

                            <p>
                                <span class="post-fecha">26 de enero de 2015 </span>por <span class="post-autor"><a href="#">Aldo</a></span>
                            </p>
                       
                            <p class="post-contenido text-justify">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                       
                            <div class="contenedor-botones">
                                <button type="button" class="btn btn-primary">Leer mas</button>
                                <button type="button" class="btn btn-success">Comentarios <span class="badge">2</span></button>
                            </div>

                        </div>

                        <div class="post clearfix col-xs-12 col-md-12 col-lg-12">

                            <a href=http://localhost:8070/Proyecto/vresena.php?resena='.$row["idnoticia"].' class="thumb pull-left">
                                <img class="img-thumbnail" src="images/maxresdefault.jpg" alt="">
                            </a>
          
                            <h2 class="post-title"> 
                                <a href="#">Creo que hoy llovera</a>         
                            </h2>

                            <p>
                                <span class="post-fecha">26 de enero de 2015 </span>por <span class="post-autor"><a href="#">Aldo</a></span>
                            </p>
                       
                            <p class="post-contenido text-justify">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                       
                            <div class="contenedor-botones">
                                <button type="button" class="btn btn-primary">Leer mas</button>
                                <button type="button" class="btn btn-success">Comentarios <span class="badge">2</span></button>
                            </div>

                        </div>
                    </div>

                    <nav>
                        <div class="center-block">
                            <ul class="pagination">
    
                                <li><a href='resena.php?pagina=1'>&laquo</a></li>
                                <li><a href='resena.php?pagina=".$anterior."'>Anterior</a></li>       
                                <li class='active'><a href='resena.php?pagina=".$i.";'>"1"</a></li>
                                <li><a href='resena.php?pagina=".$siguiente."'>Siguiente</a></li>
                                <li><a href='resena.php?pagina=".$total_paginas."'>&raquo</a></li>

                            </ul>
                        </div>
                    </nav>
             
                </section>
    @stop