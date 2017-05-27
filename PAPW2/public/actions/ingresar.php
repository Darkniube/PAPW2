<?php
include '../conexion.php';

$nombre = $_POST['nombre'];
$pass = $_POST['pass'];

$consulta = "select * from user where nombre = '$nombre' and pass='$pass'";

$result = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($result);

if($filas>0)
{
	echo 'Bienvenido';
}

else{
	echo 'Error';
}

?>