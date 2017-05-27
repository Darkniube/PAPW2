<?php
include 'conexion.php';

$comentario = $_POST['comentario'];
$numresena = $_POST['numresena'];

$comp=strlen($comentario);

if($comp > 0)
{
	$consulta = "insert into comentario(iduser, idnoticia, texto) values ('1','$numresena','$comentario')";

	$result = mysqli_query($conexion,$consulta);

	if(!$result)
	{
    echo "No logrado";
	}

	else{
     header("Location: http://localhost:8070/Proyecto/vresena.php?resena=".$numresena."");
     die();
	}

}
else{
echo 'Todos los campos deben ser rellenados';
}

?>