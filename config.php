<?php
$servername = "localhost:3307";  // Cambia esto si tu servidor es diferente
$username = "root";   // Tu usuario de MySQL
$password = ""; // Tu contraseña de MySQL
$dbname = "captivarrh"; // Nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
