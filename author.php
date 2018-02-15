<?php get_header(); ?>

<!-- This sets the $curauth variable -->

<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>

<section class="autor">
	<article>
		<header>
			<!-- Información del autor: nombre, foto, biografía y links a redes sociales  -->
			<div class="autor-biografia">
			    <div class="autor-info">
			        <?php echo get_avatar( get_the_author_meta('email'), '80' ); ?>
			        <h3 class="autor-nombre">Autor: <?php the_author_link(); ?></h3>
			        <p class="autor-descripcion"><?php the_author_meta('description'); ?></p>
			     Figura 84.  Verificación de datos del autor   <ul class="autor-enlaces">
			        	<!-- Web Institucional -->
			            <li class="autor-web">Web Institucional:  
			            	<a href="<?php the_author_meta('user_url');?>">
			            		<?php echo do_shortcode('[wp-svg-icons icon="office" wrap="i" size="20px" color="#FFF"]')?>
			            	</a>
			            </li>
			            <?php
			                // FACEBOOK
			                $perfil_facebook = get_the_author_meta( 'perfil_facebook' );
			                if ( $perfil_facebook && $perfil_facebook != '' ) {
			                    echo '<li class="autor-facebook">Facebook  
			                    		<a href="'. esc_url($perfil_facebook) .'">'. 
			                    			do_shortcode( '[wp-svg-icons icon="facebook" wrap="i" size="20px" color="#3B5998"]' ).
			                    		'</a>
			                    </li>';
			                } 
			                // TWITTER          
			                $perfil_twitter = get_the_author_meta( 'perfil_twitter' );
			                if ( $perfil_twitter && $perfil_twitter != '' ) {
			                    echo '<li class"autor-twitter">Twitter  
			                    		<a href="'. esc_url($perfil_twitter) .'">'. 
			                    			do_shortcode( '[wp-svg-icons icon="tumblr" wrap="i" size="20px" color="#00aced"]' ).
			                    		'</a>
			                    </li>';
			                }
			                // LINKEDIN
			                $perfil_linkedin = get_the_author_meta( 'perfil_linkedin' );
			                if ( $perfil_linkedin && $perfil_linkedin != '' ) {
			                     echo '<li class"autor-linkedin">LinkedIn  
			                    		<a href="'. esc_url($perfil_linkedin) .'">'. 
			                    			do_shortcode( '[wp-svg-icons icon="linkedin" wrap="i" size="20px" color="#0077B5"]' ).
			                    		'</a>
			                    </li>';
			                } 
			            ?>
			        </ul>
			    </div><!-- .autor-info-->
			</div><!-- .autor-biografia-->
		</header>
	</article>
</section>
<!-- El Loop de sus entradas-->
<section class="noticias_posts pagina_autor">
	<h4>Entradas del autor</h4>
	<?php if ( have_posts() ) : ?>
	    <?php while ( have_posts() ) : the_post(); ?>
	      <article class="noticia">
	        <header class="header_noticia_autor">
	          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	          <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>  
	        </header>
	      </article>

	    <?php endwhile; ?>
<!-- Fin del Loop -->
</section>
<?php else: ?>
	<?php _e('Ninguna entrada de este autor.'); ?>
<?php endif; ?>
<div class="pagination">
  <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
  <span class="in-right"><?php previous_posts_link('Entradas recientes »'); ?></span>
</div>

<div id="lista-autores">
    <h4><?php _e('Lista de autores:'); ?></h4>
    <form action="<?php bloginfo('url'); ?>" method="get">
        <?php wp_dropdown_users( array( 'name' => 'author' ) ); ?>
        <input type="submit" name="submit" value="Mostrar artículos" />
    </form>
</div>
<?php get_footer(); ?>
