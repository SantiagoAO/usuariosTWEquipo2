<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, contraseña) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $email, $password]);

        echo "<p>Usuario registrado exitosamente.</p>";
        echo "<a href='index.html'>Volver al inicio</a>";
    } catch (PDOException $e) {
        echo "<p>Error al registrar usuario: " . $e->getMessage() . "</p>";
    }
}
?>
