<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link rel="stylesheet" href="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/iconos.css">
    <link rel="stylesheet" href="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/style.css">
    <script src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/js/script.js"></script>
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="barra_herramientas">
        <div id="acceso" class="group">
            <a href="http://www.itiztapalapa.edu.mx/index.php/directorio/" target="_parent">Directorio   |</a>
            <a href="http://www.itiztapalapa.edu.mx/index.php/mapa-de-sitio/" target="_parent">Mapa de Sitio   |</a>
            <a href="http://www.itiztapalapa.edu.mx/index.php/contacto/" target="_parent">Contacto   |</a>
            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
              <input type="text" placeholder="Buscar…" value="<?php the_search_query(); ?>" class="caja_busqueda" name="s" id="s" />
            </form>
        </div>
        <div id="logos" class="group">
        <figure id="logo_sep">
          <a href="http://www.sep.gob.mx/" target="_black">
                <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/logoSEP_hoz.png">
            </a>
        </figure>
        <figure class="separador">
          <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/separador.png">
        </figure>
        <div id="nombre">
            <label>Tecnológico Nacional de México</label><br>
            <label>Instituto Tecnológico de Iztapalapa</label>
        </div>
       <!--  <figure class="separador">
          <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/separador.png">
        </figure>
        <figure id="logo_dgest_tec">
                <a href="http://www.www.itiztapalapa.edu.mx/#" target="_black">
                  <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/logodgest.png" />
                </a>
        </figure>
            <figure class="separador">
                <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/separador.png">
            </figure> -->
        <figure id="logo_itiz">
            <a href="http://www.itiztapalapa.edu.mx/">
                <img src="http://www.itiztapalapa.edu.mx/wp-content/themes/Tecnologico/images/escudo_ITIZ_original.png">
            </a>
        </figure>
        </div>
      </div>
      <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-list2"></span></a> 
      </div>
        
      <nav>
        <ul class="main-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
        </ul>
      </nav>
    </header>
