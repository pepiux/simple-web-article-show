
<?php
require_once 'php/config.php';
require_once 'php/articulos.php';

// Determinar si estamos viendo un artículo específico o la lista
$articulo = null;
if (isset($_GET['id'])) {
    $articulo = obtenerArticuloPorId($_GET['id']);
}

// Si no hay ID o el artículo no existe, mostrar la lista
$articulos = [];
if (!$articulo) {
    $articulos = obtenerArticulos();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $articulo ? htmlspecialchars($articulo['titulo']) : 'Artículos'; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Mi Blog de Artículos</h1>
            <p class="descripcion">Una colección de artículos interesantes sobre tecnología y desarrollo web.</p>
        </header>

        <main>
            <?php if ($articulo): ?>
                <!-- Vista detallada del artículo -->
                <a href="index.php" class="volver">&larr; Volver a la lista</a>
                <article class="articulo-detalle">
                    <h2><?php echo htmlspecialchars($articulo['titulo']); ?></h2>
                    <div class="articulo-meta">
                        <span>Por <?php echo htmlspecialchars($articulo['autor']); ?></span>
                        <span>Publicado: <?php echo date('d/m/Y', strtotime($articulo['fecha_publicacion'])); ?></span>
                    </div>
                    <?php if ($articulo['imagen']): ?>
                        <img src="img/<?php echo htmlspecialchars($articulo['imagen']); ?>" 
                             alt="<?php echo htmlspecialchars($articulo['titulo']); ?>"
                             class="articulo-imagen">
                    <?php endif; ?>
                    <div class="articulo-contenido-completo">
                        <?php echo nl2br(htmlspecialchars($articulo['contenido'])); ?>
                    </div>
                </article>
            <?php else: ?>
                <!-- Lista de artículos -->
                <div class="articulos-grid">
                    <?php foreach ($articulos as $art): ?>
                        <article class="articulo-card">
                            <?php if ($art['imagen']): ?>
                                <img src="img/<?php echo htmlspecialchars($art['imagen']); ?>" 
                                     alt="<?php echo htmlspecialchars($art['titulo']); ?>"
                                     class="articulo-imagen">
                            <?php endif; ?>
                            <div class="articulo-contenido">
                                <h2 class="articulo-titulo"><?php echo htmlspecialchars($art['titulo']); ?></h2>
                                <div class="articulo-meta">
                                    <span>Por <?php echo htmlspecialchars($art['autor']); ?></span>
                                    <span><?php echo date('d/m/Y', strtotime($art['fecha_publicacion'])); ?></span>
                                </div>
                                <p class="articulo-extracto">
                                    <?php echo htmlspecialchars(substr($art['contenido'], 0, 150)) . '...'; ?>
                                </p>
                                <a href="index.php?id=<?php echo $art['id']; ?>" class="leer-mas">Leer más</a>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </main>
        
        <footer>
            <p>&copy; <?php echo date('Y'); ?> Mi Blog de Artículos</p>
        </footer>
    </div>
</body>
</html>
