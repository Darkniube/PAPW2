<?php 
include 'conexion.php';

$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];

$comp = strlen($titulo) * strlen($contenido);

if($comp > 0)
{
	$consulta = "insert into comentario(iduser, titulo, texto) values ('1','$titulo','$contenido')";

	$result = mysqli_query($conexion,$consulta);

	if(!$result)
	{
     echo "no Logrado";
	}
	else{
     header("Location: http://localhost:8070/Proyecto/noticias.php");
     die();
	}

}
else{
	echo 'Todos los campos deben ser rellenados';
}
?>