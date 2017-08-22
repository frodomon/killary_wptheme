<?php get_header(); ?>
<meta name="Description" content="Sitio web oficial de Killary, cantante y compositoria de Arequipa, Perú. Noticias">
  <?php wp_head(); ?>
</head>
<body>
  <header>
     <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </header>
<div id="page-header-photo">
  <div class="page-header-photos">
    <div id="News_Killary">
    </div>
  </div>
  <div class="bottom-header">
    <nav>
        <div class="nav-logo">
          <img id="logo-header" src="<?php echo get_template_directory_uri().'/images/logo killary.png'; ?>">
        </div>
        <div class="nav-menu">
            <?php wp_nav_menu( array('menu' => 'Menu Principal' )); ?>
        </div>
        <?php if (!dynamic_sidebar('header-widget')) {} ?>
    </nav>
  </div>
</div>
<div class="page-content-wrap">
  <div class="page-content">
    <!-- Contenido del post -->
    <?php if ( have_posts() ) : the_post(); ?>
      <section id="Killary_post">

        <h1 id="Killary_PostTitle"><?php the_title(); ?></h1>
        <time class="PostTime" datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
        <?php the_category (); ?>
        <div id="Killary_post_excerpt"><?php the_excerpt(); ?></div>
        <?php if ( has_post_thumbnail()) { ?>
          <div class="Killary_post_thumbnail">
            <?php the_post_thumbnail(); ?>
          </div>
        <?php } ?>
        <div id="Killary_post_content">
          <?php the_content(); ?>
        </div>
        <?php if(has_tag()){ ?>
          <div id="Killary_post_tags">
            <p>Related Tags: </p>
            <?php the_tags('<ul class="post_tags"><li class="tags_link"> ',',</li><li class="tags_link"> ','</li></ul>'); ?>
          </div>
        <?php } ?>
        <!-- Comentarios -->
        <div class="fbc-comments">
          <?php echo do_shortcode('[fbcomments]'); ?>
        </div>
      </section>
    <?php else : ?>
      <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
    <?php endif; ?>
  </div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>