<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contra = $_POST['contra'];
$contra2 = $_POST['contra2'];

$comp = strlen($nombre) * strlen($correo) * strlen($contra);

if($comp > 0)
{
	if($contra==$contra2)
	{
		$consulta = "insert into user(nombre,correo,pass) values ('$nombre','$correo','$contra')";

		$result = mysqli_query($conexion,$consulta);

		if(!$result)
		{
			echo'error al registrarse';
		}
		else
		{
			echo'A huevo';
		}
	}
	else
	{
		echo 'Las contraseñas no coinciden';
	}

}
else
{
	echo 'Por favor rellene todos los campos';
}

mysqli_close($conexion);
?>