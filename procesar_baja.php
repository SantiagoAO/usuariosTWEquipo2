<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    try {
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            echo "<p>Usuario eliminado exitosamente.</p>";
        } else {
            echo "<p>Usuario no encontrado.</p>";
        }

        echo "<a href='index.html'>Volver al inicio</a>";
    } catch (PDOException $e) {
        echo "<p>Error al eliminar usuario: " . $e->getMessage() . "</p>";
    }
}
?>
