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

  //Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);

add_filter( 'user_contactmethods', 'perfil_usuario_personalizado' );
function perfil_usuario_personalizado( $user_contact ) {
   /* Añadimos campos al perfil: Twitter y Skype */
    $user_contact['perfil_facebook'] = __('Facebook');
    $user_contact['perfil_twitter'] = __('Twitter');
    $user_contact['perfil_linkedin'] = __('LinkedIn');  
 
    /* Eliminamos los campos AIM, Jabber y Yahoo IM del perfil */
    // unset($user_contact['aim']);
    // unset($user_contact['jabber']);
    // unset($user_contact['yim']); 
    return $user_contact;
}