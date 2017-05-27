<?php

  include 'conexion.php';

  session_start();

    $usuario = $_POST['nombre'];
    $password = $_POST['pass'];

     $consulta = "select * from user where nombre = '$usuario' and pass = '$password'";
    $result = mysqli_query($conexion,$consulta);
  

    if($row = mysqli_fetch_array($result))
   {
    $_SESSION['id_sesion']=$row['iduser'];
    $_SESSION['nombre']=$row['nombre'];

    header("Location: http://localhost:8070/Proyecto/resena.php");
   }
   else
   {
    header("Location: http://localhost:8070/Proyecto/index.html");
   }

?>