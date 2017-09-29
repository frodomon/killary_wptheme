<?php //Template Name: Music-Page
	get_header();  ?>
	<header>
 	  <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
	<div id="page-header-photo">
		<div class="page-header-photos">
			<div id="Music_Killary">
			</div>
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
			<div class="albums">
				<div class="origenes group">
					<div class="album_image">
						<div class="album_content">
							<img id="album_image" src="<?php echo get_template_directory_uri().'/images/Killary - Origenes.png'; ?>">
						</div>
					</div>
					<div class="album_description">
						<div class="album_content">
							<div class="album_name">
								<h2 class="album_title">Orígenes</h2>
								<img id="Killary-Separador-Music" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
							</div>
							<div class="album_player">
								<iframe class="music-album" scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=400&height=488&color=007FEB&layout=dark&size=medium&type=album&id=8586828&app_id=1"></iframe>
							</div>
						</div>
					</div>
				</div>
				<div class="amanecer group">
					<div class="album_image">
						<div class="album_content">
							<img id="album_image" src="<?php echo get_template_directory_uri().'/images/Killary - Canto al Amanecer.png'; ?>">
						</div>
					</div>
					<div class="album_description">
						<div class="album_content">
							<div class="album_name">
								<h2 class="album_title">Canto al amanecer</h2>
								<img id="Killary-Separador-Music" src="<?php echo get_template_directory_uri().'/images/Killary-Separador.png'; ?>">
							</div>
							<div class="album_player">	
								<iframe class="music-album" scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=classic&autoplay=false&playlist=true&width=400&height=488&color=007FEB&layout=dark&size=medium&type=album&id=13673718&app_id=1"></iframe>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="single_name">
				<h2 class="single_title">La Herencia - Single</h2>
			</div>
			<div class="singles">
				<div class="herencia">
					<div class="single_content">	
						<div class="single_player">
							<iframe class="music-single" scrolling="no" frameborder="0" allowTransparency="true" src="http://www.deezer.com/plugins/player?format=square&autoplay=false&playlist=false&width=400&height=400&color=007FEB&layout=dark&size=big&type=tracks&id=103717822&app_id=1"></iframe>			
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>