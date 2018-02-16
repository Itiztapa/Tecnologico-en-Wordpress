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
        <footer>
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
            <address>Por <?php the_author_posts_link() ?></address>
        </footer>
        <img src="http://localhost/wp-content/themes/Tecnologico/images/lineahorizontal.png" alt="" width="980px">
      </article>
    <?php endwhile; ?>
    <div class="pagination">
      <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
      <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
    </div>
  </section>

<div id="lista-autores">
    <h4><?php _e('Lista de autores:'); ?></h4>
    <form action="<?php bloginfo('url'); ?>" method="get">
        <?php wp_dropdown_users( array( 'name' => 'author' ) ); ?>
        <input type="submit" name="submit" value="Mostrar artículos" />
    </form>
</div>

<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
