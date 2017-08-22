<?php //Template Name: Bio-Page
	get_header();  ?>
	<header>
		<h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	</header>
	<div id="page-header-photo">
		<div class="page-header-photos">
			<div id="Bio_Killary">
			</div>
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
			<div class="bio-content-left mobile">
				<img id="Bio-Flowers-Left"src="<?php echo get_template_directory_uri().'/images/Killary-Bio-Flor-Izq.png'; ?>">
			</div>
			<div class="bio-content-center">
				<div class="page_title">
					<h1 id="page_title"><?php the_title(); ?></h1>
				</div>
				<div class="bio_content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
		        		<?php the_content(); ?>
		    		<?php endwhile; endif; ?>
				</div>	
			</div>
			<div class="bio-footer mobile">
				<div class="bio-footer-right">
					<img id="Bio-Flowers-Right" src="<?php echo get_template_directory_uri().'/images/Killary-Bio-Flor-Der.png'; ?>">
				</div>
			</div>
			<div class="fix-mobile">
				<img id="Killary-Separador-Bio" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
			</div>
		</div>
	</div>

<?php get_footer(); ?>