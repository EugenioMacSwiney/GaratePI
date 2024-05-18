<?php
include('/app/db.php');

// Escapar el valor de ID para prevenir inyección SQL
$ID = mysqli_real_escape_string($conexion, $_POST['txtID']);

// Preparar la consulta SQL
$query = "DELETE FROM usuarios WHERE ID = ?";
$stmt = mysqli_prepare($conexion, $query);

// Vincular el parámetro
mysqli_stmt_bind_param($stmt, "s", $ID);

// Ejecutar la consulta
if (mysqli_stmt_execute($stmt)) {
    // Eliminar exitoso
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
    header("Location: /mostrar.php");
    exit();
} else {
    // Error al eliminar
    echo "Error al eliminar: " . mysqli_stmt_error($stmt);
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>
