<!-- Archivo de llamado del archivo header.php, cabecera global -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php echo file_get_contents("http://localhost/content-front-page.php"); ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_footer(); ?>
