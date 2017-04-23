<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/sitioengeneral.css">
	
	<style type="text/css">

	.post{
	    padding:20px;

	    margin-bottom:20px;
	    border-bottom: 1px solid #999;
	}
	
	.post .post-title a{
	    color:gray;
	}
	
	.post .thumb{
		margin-right: 10px;
	    width:30%;
	}
	
	.post .contenedor-botones{
	    width:100%;
	}
	
	.list-group:hover .list-group-item:hover{
	    background:gray;
	    color:white;
	}

	.jumbotron{
	    background:#003380;
	    padding-top: 0px;
        padding-bottom: 0px;
	    margin:0px;
	}

    @media screen and (max-width:868px){
        .logo{
            width: 80%; 
            height: 180px;
        }
        .post .thumb{
            width:100%;
        }
        .box{
            margin-left: 0px;
            margin-right: 0px;
        }
    }
    
    @media screen and (max-width:420px){
        .logo{
            width: 90%; 
            height: 120px;
        }
        .box{
            padding: 0;
            background: #e6ecff;
            margin-left: 0px;
            margin-right: 0px;
        }
        .post .thumb{
            width:100%;
        }
    }
	
	/*Modal*/

	.modal-content{
        margin-top: 100px;
        padding: 20px;
        background-image: -webkit-linear-gradient(left, #005ce6, #003380);
        box-shadow: 0px 0px 40px #1a75ff,  0px 0px 40px white;
    }

   .input-group-addon,.colorF{
        background:#001f4d;
        color:white;
        border:solid 1px #3333ff;
    }

    .modal{
        background:rgba(0,0,0,0.5);
    /*filter: blur(6px);*/
    }

	</style>
</head>
<body class="box">
    <div class="fondo">
        <div class="jumbotron">
            <section class="container fondologo">
	            <img src="images/logo.png" alt="" class="logo center-block">
            </section>
        </div>

        <header>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">TAmovies</a>
                    </div>
   
                    <div class="navbar-collapse collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#nnoti">Agregar noticias</a></li>
                        </ul>
        
                        <ul class="nav navbar-nav navbar-right"> 
                            <li><a href="http://localhost:8070/Proyecto/login.php">Iniciar sesion</a></li>
                        </ul>
    
                        <form method="post" class="navbar-form navbar-right" role="search">
    
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="buscar...">
                            </div>   
                            <div class="form-group">
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>    
                            </div>  

                        </form>

                    </div>    

                </div>
            </nav>
        </header>
   
   <!--Seccion de reseñas-->
       <section class="main container">
            <div class="row">
	            <section class="posts col-xs-12 col-md-12 col-lg-9">

                    <h1>Perfil</h1>
	
	            </section>
	   
	            <section class="posts hidden-xs hidden-md col-lg-3">
	                <h4>Noticias mas recientes</h4>
	                    <aside> 

	                        <a href="#" class="list-group-item">
		                        <h4 class="list-group-item-heading">creo que hoy llovera</h4>
		                        <p clss="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
		                    </a>

		                    <a href="#" class="list-group-item">
		                        <h4 class="list-group-item-heading">creo que hoy llovera</h4>
		                        <p clss="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
		                    </a>
	                    </aside>
	            </section>
        	</div>
        </section>

        <div class="modal fade" id="nnoti" tabindex="-1" role="dialog" arial-labelledly="myModalLabel" arial-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
  
                    <div class="modal-header"> 
      
                        <label class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></label>
                        <h2>Insertar noticia </h2>

                    </div>

                    <div class="modal-body"> 
                        <form method="post" action="actions/resena.php">
           
                            <div class="form-group">
                                <h4>Titulo: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-star"></span></div>
                                    <input type="text" id="titulo" name="titulo" class="form-control colorF">
                                </div>
                            </div>
           
                            <div class="form-group">
                                <h4>Contenido: </h4>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                                    <textarea id="contenido" name="contenido" class="form-control colorF" rows="10"></textarea>
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


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<body>
</html>