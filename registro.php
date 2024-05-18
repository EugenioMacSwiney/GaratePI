<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('/app/db.php');

$nombre=$_POST['txtNombre'];
$usuario=$_POST['txtUsuario'];
$contrasena=$_POST['txtContrasena'];

$consulta="INSERT INTO `usuarios` (`Nombre`, `Usuario`, `Contrasena`) 
VALUES ('$nombre', '$usuario', '$contrasena')";

$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "registrado";

mysqli_close($conexion);
?>