<?php //Template Name: Gallery Content Page
	get_header();  ?>
	<header>
 		<h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
	<div id="page-header-photo">
		<div class="page-header-photos">
			<div id="Gallery_Killary"></div>
		</div>
		<div class="bottom-header">
		  <nav>
		    <div class="nav-logo">
		      <?php $url = home_url( '/' ); ?>
		      <a href="<?php echo esc_url($url) ?>"><img id="logo-header" src="<?php echo get_template_directory_uri().'/images/logo killary blanco.png'; ?>"></a>
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
			<h1 class="video_title"><?php the_title(); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
		        <div class="video-content">
		        	<?php the_content(); ?>
		        </div>
		    <?php endwhile; endif; ?>
		</div>
	</div>
<?php get_footer(); ?>