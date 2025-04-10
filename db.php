<?php
$host = 'localhost';
$dbname = 'usuarios_db';
$username = 'root'; // Cambia esto según tu configuración
$password = '';     // Cambia esto según tu configuración

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
