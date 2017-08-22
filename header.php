<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        // Add the blog name.
        bloginfo( 'name' );
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
          echo " | $site_description";
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
          echo ' | ' . sprintf( __( 'Page %s', 'mytheme' ), max( $paged, $page ) );
      ?>
    </title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="Description" content="Sitio web oficial de Killary, cantante y compositoria de Arequipa, Perú. Nueva música peruana para un nuevo Perú (para un nuevo mundo)">
    <meta property="og:url" content="http://wwww.killaryperu.com" />
    <meta property="og:site_name" content="Killary" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Killary | Nueva música peruana para un nuevo Perú" />
    <meta property="og:description" content="Sitio web oficial de Killary, cantante y compositora nativa de Arequipa, Perú" />
    <meta property="og:image" content="http://www.killaryperu.com/wp-content/themes/Killary/images/Killary-Home.png" />
    <?php wp_head(); ?>
  </head>
  <body>
    
    
      