<?php
include('/app/db.php');
$ID=$_POST['txtID'];
$NOMBRE=$_POST['txtNombre'];
$USUARIO=$_POST['txtUsuario'];
$CONTRASENA=$_POST['txtContrasena'];

mysqli_query($conexion, "UPDATE `usuarios` SET `Nombre` = '$NOMBRE',
 `Usuario` = '$USUARIO', `Contrasena` = '$CONTRASENA' WHERE `id` = '$ID'") or die ("error");

mysqli_close($conexion);
header("Location: /mostrar.php");
?>