<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();

        if ($usuario) {
            $updateFields = [];
            $params = [];

            if (!empty($nombre)) {
                $updateFields[] = "nombre = ?";
                $params[] = $nombre;
            }

            if (!empty($password)) {
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
                $updateFields[] = "contraseña = ?";
                $params[] = $hashedPassword;
            }

            if (!empty($updateFields)) {
                $query = "UPDATE usuarios SET " . implode(", ", $updateFields) . " WHERE email = ?";
                $params[] = $email;

                $stmt = $pdo->prepare($query);
                $stmt->execute($params);

                echo "<p>Usuario actualizado exitosamente.</p>";
            } else {
                echo "<p>No se proporcionaron cambios.</p>";
            }
        } else {
            echo "<p>Usuario no encontrado.</p>";
        }

        echo "<a href='index.html'>Volver al inicio</a>";
    } catch (PDOException $e) {
        echo "<p>Error al actualizar usuario: " . $e->getMessage() . "</p>";
    }
}
?>
