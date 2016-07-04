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
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <nav>
        <div class="nav-logo">
          <img id="logo" src="<?php echo get_template_directory_uri().'/images/logo killary.png'; ?>">
        </div>
        <div class="nav-menu">
            <?php wp_nav_menu( array('menu' => 'Menu Principal' )); ?>
        </div>
      </nav>
    </header>