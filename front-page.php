<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<header>
	 <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
</header>
	<!-- Contenido de página de inicio -->
	<div id="Home_Killary">
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

<div class="responsive-menu">
  <?php wp_nav_menu( array( 'theme_location' => 'primary mobile', 'menu_class' => 'toggle-menu' ) ); ?>
</div>
    
<div class="page-content-wrap">
	<div class="page-content group">
		<div class="yt-section">
			<?php echo do_shortcode('[youtube_channel]'); ?>
		</div>
		<div class="fb-section">
			<img id="Killary-Separador" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
			<?php echo do_shortcode('[custom-facebook-feed]'); ?>
			<img id="Killary-Separador" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
		</div>
	</div>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
<div id="openModal" class="modalDialog">
   <div>
   		<a href="#" title="Close" class="closeModal">X</a>
      <a href="http://www.killaryperu.com/moon-of-arequipa/"><img src="<?php echo get_template_directory_uri().'/images/Killary_Home.png'; ?>" alt="Luna Arequipeña"></a>
   </div>
</div>
<script type="text/javascript">
  $(window).ready(function(){
		$('#openModal .closeModal').on('click', function(){
    	$('#openModal').hide();
    });
  });
</script>