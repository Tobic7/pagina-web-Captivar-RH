<?php
session_start();
include 'config.php';

if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin') {
    die("No tienes permisos para eliminar empleos.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $empleo_id = $_POST['empleo_id'];

    $sql = "DELETE FROM empleos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $empleo_id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Empleo eliminado exitosamente.";
    } else {
        echo "No se encontró el empleo o no se pudo eliminar.";
    }
    $stmt->close();
}

$conn->close();
?>
<form method="post" action="delete_job.php">
    <input type="number" name="empleo_id" placeholder="ID del empleo" required>
    <button type="submit">Eliminar empleo</button>
</form>
