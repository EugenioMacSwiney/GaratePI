<?php
ob_start(); // Iniciar el almacenamiento en búfer de salida

$DB_HOST = $_ENV["DB_HOST"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASSWORD = $_ENV["DB_PASSWORD"];
$DB_NAME = $_ENV["DB_NAME"];
$DB_PORT = $_ENV["DB_PORT"];

$conexion = mysqli_connect("$DB_HOST:$DB_PORT", "$DB_USER", "$DB_PASSWORD", "$DB_NAME") or die("Error de conexión: " . mysqli_connect_error());
