
<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';      // Tu host de MySQL
$dbname = 'articulos_db'; // Nombre de la base de datos
$username = 'usuario';    // Tu nombre de usuario MySQL
$password = 'contraseña'; // Tu contraseña MySQL

// Crear conexión
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    // Establecer el modo de error PDO a excepción
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
