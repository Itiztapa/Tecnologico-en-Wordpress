<?php
  define('WP_USE_THEMES', false);
  require('wp-load.php');
  query_posts('showposts=5');?>
      
  <?php if (have_posts()): the_post(); ?>
  <?php endif; ?>
  <?php if ( have_posts() ) : ?>
  <section class="noticias_posts p_principal">
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="noticia">
        <div class="noticia_imagen">
          <a href="<?php the_permalink(); ?>">
            <?php
            $szPostContent = $post->post_content;
            // Defininimos el patrón a buscar
            $szSearchPattern = '~<img [^\>]*\>~';
            // Ejecutamos preg_match_all para obtener todas las imágenes y guardar los resultados en $aPics
            preg_match_all( $szSearchPattern, $szPostContent, $aPics );
            // Contamos los resultados
            $iNumberOfPics = count($aPics[0]);
            // Comprobación de si hay al menos 1 imagen
            if ( $iNumberOfPics > 0 )
            {
                 echo $aPics[0][0];
            };
            ?>
        </a>
        </div>
        <div class="noticia_contenido">
          <header>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
          </header>
          <?php the_excerpt(); ?>
          <div class="noticia_contenedor_ver">
            <a href="<?php the_permalink(); ?>">Ver publicacion</a>
          </div>
          <footer>
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
              <address>Por <?php the_author_posts_link() ?></address>
          </footer>
        </div>
      </article>
      <img src="http://localhost/wp-content/themes/Tecnologico/images/lineahorizontal.png" alt="">
    <?php endwhile; ?>
  </section>
<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
