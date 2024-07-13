<?php
$servername = "localhost:3307";  
$username = "root";  
$password = ""; 
$dbname = "captivarrh"; 

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
