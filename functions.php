<?php

/**
 * Crear nuestros menús gestionables desde el
 * administrador de Wordpress.
 */

function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
    )
  );
}
add_action( 'init', 'mis_menus' );

 //  Main Sidebar
 if(function_exists('register_sidebar'))
      register_sidebar(array(
      'name' => 'Main Sidebar',
       'before_widget' => '<hr>',
        'after_widget' => '',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
 ));