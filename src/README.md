
# Aplicación Simple de Artículos en PHP + MySQL

Esta es una aplicación web responsive sencilla desarrollada en PHP y MySQL que muestra artículos de un blog. 
Está diseñada para ser implementada en hosting compartido con soporte PHP y MySQL.

## Estructura del Proyecto

```
proyecto/
├── css/
│   └── styles.css
├── img/
│   ├── php.jpg
│   ├── mysql.jpg
│   └── responsive.jpg
├── php/
│   ├── config.php
│   └── articulos.php
├── database.sql
├── index.php
└── README.md
```

## Instalación

1. **Configurar la base de datos**:
   - Crea una base de datos en tu hosting MySQL
   - Importa el archivo `database.sql` para crear la tabla y los datos iniciales

2. **Configurar la conexión**:
   - Modifica el archivo `php/config.php` con tus credenciales de acceso:
     - Nombre de la base de datos
     - Usuario de MySQL
     - Contraseña de MySQL
     - Host (normalmente localhost)

3. **Subir archivos**:
   - Sube todos los archivos a tu servidor web mediante FTP u otro método
   - Asegúrate de que los permisos de los archivos estén correctamente configurados

4. **Imágenes**:
   - Crea una carpeta `img` y sube las imágenes de ejemplo o tus propias imágenes

## Funcionamiento

- La página principal (`index.php`) muestra una lista de artículos en formato de tarjetas
- Al hacer clic en "Leer más" se muestra el artículo completo
- El diseño es totalmente responsive y se adapta a dispositivos móviles y de escritorio

## Personalización

Puedes personalizar fácilmente esta aplicación:

- Modifica los estilos en `css/styles.css`
- Cambia la estructura de la base de datos según tus necesidades
- Agrega más funcionalidades como paginación, categorías, etc.

## Seguridad

Este código incluye medidas básicas de seguridad:

- Uso de PDO para consultas preparadas (previene SQL Injection)
- Escape de salida HTML para prevenir XSS
- Validación básica de entradas

Para un entorno de producción, considera implementar medidas adicionales como:
- HTTPS
- Autenticación para administración de contenido
- Validación más estricta de entradas
