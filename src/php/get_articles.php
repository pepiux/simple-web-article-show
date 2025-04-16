
<?php
header('Content-Type: application/json');
require_once 'config.php';
require_once 'articulos.php';

try {
    $articulos = obtenerArticulos(10); // Get up to 10 articles
    echo json_encode($articulos);
} catch(Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>

