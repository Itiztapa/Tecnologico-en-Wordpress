<?php get_header(); ?>

  	<?php if ( have_posts() ) : ?>
  <section class="noticias_posts p_principal">
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="noticia">
        <header>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>  
        </header>
        <?php the_excerpt(); ?>
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

</section> <!-- Fin de main -->

<?php get_footer(); ?>