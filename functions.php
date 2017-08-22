<?php
  /* Cargar el archivo scripts.php que incluye varias archivos css y js */
  include(TEMPLATEPATH . '/includes/scripts.php');
  /* Crear nuestros menús gestionables desde el administrador de Wordpress. */
  include(TEMPLATEPATH . '/includes/menus.php');
  /* Crear una zonan de widgets que podremos gestionar fácilmente desde administrador de Wordpress. */
  include(TEMPLATEPATH . '/includes/widgets.php');

  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  /* Agregar imagen destacada a los posts */
  add_theme_support( 'post-thumbnails' );
?>