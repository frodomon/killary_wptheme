<?php get_header(); ?>
  <header>
    <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
  <div id="page-header-photo">
    <div class="page-header-photos">
      <div id="News_Killary"></div>
    </div>
    <div class="bottom-header">
      <nav>
        <div class="nav-logo">
          <div class="logo">
            <?php $url = home_url( '/' ); ?>
            <a href="<?php echo esc_url($url) ?>"><img id="logo-header" src="<?php echo get_template_directory_uri().'/images/logo killary purple.png'; ?>"></a>
          </div>
        </div>
        <menu>
          <?php wp_nav_menu( array('menu' => 'Menu Principal' )); ?>
        </menu>
        <?php if (!dynamic_sidebar('header-widget')) {} ?>
        <div class="togglemenu">
          <a class="togglebar" href="#" title="Menu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
        </div>
      </nav>
    </div>
  </div>
  <div class="responsive-menu">
    <?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'toggle-menu' ) ); ?>
  </div>
  <div class="page-content-wrap">
    <div class="page-content">
      <h1 id="blog_title"><?php echo __(utf8_encode("<!--:en-->News<!--:--><!--:es-->Noticias<!--:-->")); ?></h1>
      <!-- Listado de posts -->
      <?php if ( have_posts() ) : ?>
        <section id="Killary_news">
          <?php while ( have_posts() ) : the_post(); ?>
            <article >
              <div id="Killary_minipost">
                <?php if ( has_post_thumbnail()) { ?>
                  <div class="Killary_minipost_thumbnail">
                    <?php the_post_thumbnail(); ?>
                  </div>
                  <div class="Killary_minipost_content-with-thumbnail">
                <?php } else { ?>
                  <div class="Killary_minipost_content">
                <?php } ?>
                  <h1 id="Killary_post_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h1>
                  <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
                  <?php if ( has_excerpt()) { ?>
                    <div id="Killary_post_excerpt"><?php the_excerpt(); ?></div>
                  <?php }  ?>
                  <?php if(has_tag()){ ?>
                    <div id="Killary_post_tags">
                      <p>Related Tags: </p>
                      <?php the_tags('<ul class="post_tags"><li class="tags_link"> ',',</li><li class="tags_link"> ','</li></ul>'); ?>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="Separador-Gallery">
                <img id="Killary-Separador-News" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
              </div>
            </article>
          <?php endwhile; ?>
          <div class="pagination">
            <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
            <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
          </div>
        </section>
      <?php else : ?>
        <p><?php _e('Ups!, no hay entradas.'); ?></p>
      <?php endif; ?>
    </div>    
  </div>
  <!-- Archivo de barra lateral por defecto -->
  <!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>