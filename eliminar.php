<?php
ob_start(); // Iniciar el almacenamiento en búfer de salida
include('/app/db.php');

// Escapar el valor de ID para prevenir inyección SQL
$ID = mysqli_real_escape_string($conexion, $_POST['txtID']);
echo "ID a eliminar: " . $ID . "<br>"; // Declaración de depuración

// Preparar la consulta SQL
$query = "DELETE FROM usuarios WHERE ID = ?";
echo "Consulta SQL: " . $query . "<br>"; // Declaración de depuración
$stmt = mysqli_prepare($conexion, $query);

// Vincular el parámetro
mysqli_stmt_bind_param($stmt, "s", $ID);
echo "Parámetro vinculado<br>"; // Declaración de depuración

// Ejecutar la consulta
if (mysqli_stmt_execute($stmt)) {
    echo "Consulta ejecutada correctamente<br>"; // Declaración de depuración
    // Eliminar exitoso
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
    ob_end_clean(); // Limpiar el búfer de salida antes de redirigir
    header("Location: /mostrar.php");
    exit();
} else {
    // Error al eliminar
    echo "Error al eliminar: " . mysqli_stmt_error($stmt) . "<br>"; // Declaración de depuración
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>
