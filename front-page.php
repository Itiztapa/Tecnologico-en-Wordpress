<!-- Archivo de llamado del archivo header.php, cabecera global -->
<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
  <section>
    <?php the_content(); ?>
  </section>
<?php endif; ?>

<!-- Contenido de página de inicio -->
<?php echo file_get_contents("http://www.itiztapalapa.edu.mx/content-front-page.php"); ?>

<!-- LLamado del contenido del archivo sidebar.php -->
<?php get_sidebar(); ?>

<!-- Archivo de barra lateral por defecto -->
<?php get_footer(); ?>
