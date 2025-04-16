
-- Base de datos para la aplicación de artículos

-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS articulos_db;
USE articulos_db;

-- Tabla de artículos
CREATE TABLE IF NOT EXISTS articulos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    contenido TEXT NOT NULL,
    imagen VARCHAR(255),
    fecha_publicacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    autor VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insertar algunos datos de ejemplo
INSERT INTO articulos (titulo, contenido, imagen, autor) VALUES 
('Introducción a PHP', 'PHP (acrónimo recursivo de PHP: Hypertext Preprocessor) es un lenguaje de código abierto muy popular especialmente adecuado para el desarrollo web y que puede ser incrustado en HTML. En lugar de usar muchos comandos para mostrar HTML, PHP permite embeber pequeños fragmentos de código dentro del HTML.', 'php.jpg', 'Juan Pérez'),
('MySQL para principiantes', 'MySQL es un sistema de gestión de bases de datos relacional desarrollado bajo licencia dual: Licencia pública general/Licencia comercial por Oracle Corporation y está considerada como la base de datos de código abierto más popular del mundo.', 'mysql.jpg', 'María Gómez'),
('Diseño Responsive', 'El diseño web responsive o adaptativo es una técnica de diseño web que busca la correcta visualización de una misma página en distintos dispositivos. Desde ordenadores de escritorio a tablets y móviles.', 'responsive.jpg', 'Carlos Rodríguez');
