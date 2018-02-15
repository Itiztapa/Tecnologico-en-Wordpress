<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido del post -->
<?php if ( have_posts() ) : the_post(); ?>
  <section class="contenidopagina">
    <?php the_content(); ?>
    <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/lineahorizontal.png" alt="" width="980px">
  </section>
<?php else : ?>
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
