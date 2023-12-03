<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Factoriales</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Tabla de Factoriales</h1>
<?php
include 'parcial2.php';

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labsdb";

// Crear una instancia de la clase Factorial
$factorial = new Factorial($servername, $username, $password, $dbname);

// Mostrar la tabla de factoriales
$factorial->mostrarTabla();
?>
