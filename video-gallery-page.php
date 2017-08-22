<?php //Template Name: Video Gallery Page
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
			<div class="Killary_VideoGallery_Item">
				<h2 class="gallery_title">Videoclips</h2>
				<a href="http://www.killaryperu.com/gallery/video-gallery/videoclips"><img src="https://c6.staticflickr.com/8/7642/28845457981_2b3246da0c_o.jpg"></a>
			</div>
			<div class="Killary_VideoGallery_Item">
				<h2 class="gallery_title"><?php echo __(utf8_encode("<!--:en-->Searching for my Music<!--:--><!--:es-->Buscando mi M&#250sica<!--:-->")); ?></h2>
				<a href="http://www.killaryperu.com/gallery/video-gallery/searching-for-my-music"><img src="https://c4.staticflickr.com/9/8599/28921573955_b169d8cbe4_o.jpg"></a>
			</div>
			<div class="Separador-Gallery">
				<img id="Killary-Separador-Gallery" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
			</div>
		</div>
	</div>
<?php get_footer(); ?>