<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>
  <section class="noticias_posts pagina_noticias">
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="noticia seccion_noticias">
        <header>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
        </header>
        <?php the_excerpt(); ?>
        <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/lineahorizontal.png" alt="" width="980px">
      </article>
    <?php endwhile; ?>
    <div class="pagination">
      <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
      <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
    </div>
  </section>
<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

<!-- Archivo de pie global de Wordpress -->
<?php get_footer(); ?>
