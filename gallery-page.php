<?php //Template Name: Gallery-Page
	get_header();  ?>
	<header>
 	  <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
	<div id="page-header-photo">
		<div class="page-header-photos">
			<div id="Gallery_Killary">
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
			<div class="Killary_Gallery_Item">
				<h2 class="gallery_title">Videos</h2>
				<a href="http://www.killaryperu.com/video-gallery"><img  src="https://c8.staticflickr.com/9/8750/28920901615_59cc5c1d52_o.jpg"></a>
			</div>
			<div class="Killary_Gallery_Item">
				<h2 class="gallery_title"><?php echo __(utf8_encode("<!--:en-->Photos<!--:--><!--:es-->Fotos<!--:-->")); ?></h2>
				<a href="http://www.killaryperu.com/gallery/photos"><img src="https://c1.staticflickr.com/9/8567/28889600656_d50e3d8fef_o.jpg" alt="IMG_2194"></a>
			</div>
			<div class="Separador-Gallery">
				<img id="Killary-Separador-Gallery" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
			</div>
		</div>
	</div>
<?php get_footer(); ?>