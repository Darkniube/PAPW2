<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('titulo')
    <link rel="icon" type="image/png" href="images/logo2.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="css/sitioengeneral.css">
    @yield('estilos')

</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand sinpadding-top"><span><img src="images/logo2.png" class="img-logo" alt=""></span></a>
                    <a href="#" class="navbar-brand">TAmovies</a>
                </div>
     
                <div class="navbar-collapse collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="/resena">Inicio</a></li>
                    </ul>
        
                    <ul class="nav navbar-nav navbar-right"> 
                        <li><a href="/login">Iniciar sesion</a></li>
                    </ul>

                </div>      
            </div>
        </nav>
    </header>
    
    @yield('content')

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modal.js"></script>
@yield('script')
</body>
</html>