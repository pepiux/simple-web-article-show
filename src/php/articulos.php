
<?php
require_once 'config.php';

function obtenerArticulos($limite = 10) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM articulos ORDER BY fecha_publicacion DESC LIMIT :limite");
        $stmt->bindParam(':limite', $limite, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch(PDOException $e) {
        echo "Error al obtener artículos: " . $e->getMessage();
        return [];
    }
}

function obtenerArticuloPorId($id) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("SELECT * FROM articulos WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    } catch(PDOException $e) {
        echo "Error al obtener el artículo: " . $e->getMessage();
        return null;
    }
}
?>
