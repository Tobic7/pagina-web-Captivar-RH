<?php
session_start();
include 'config.php';

if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}

echo "Bienvenido, " . ($_SESSION['rol'] == 'admin' ? "Administrador" : "Usuario") . ".";
?>

<a href="logout.php">Cerrar sesión</a>

<?php if ($_SESSION['rol'] == 'admin'): ?>
    <a href="delete_job.php">Eliminar un empleo</a>
    <!-- Aquí puedes agregar enlaces o formularios para agregar o modificar empleos -->
<?php else: ?>
    <h2>Trabajos Disponibles</h2>
    <?php
    $sql = "SELECT * FROM empleos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . $row['titulo'] . "</h3>";
            echo "<p>" . $row['descripcion'] . "</p>";
            echo "<p><strong>Empresa:</strong> " . $row['empresa'] . "</p>";
            echo "<p><strong>Fecha de Publicación:</strong> " . $row['fecha_publicacion'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No hay trabajos disponibles.";
    }
    ?>
<?php endif; ?>

<?php
$conn->close();
?>