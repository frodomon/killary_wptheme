<?php //Template Name: LunaAQP-Page
  get_header(); ?>
	<header>
 	   <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
	<!-- Contenido de página de inicio -->
	 <div id="page-header-photo">
    <div class="page-header-photos">
      <div id="Luna_Killary" style="background-position-y: 7%;"></div>
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
			<div class="lunaaqp-content-top">
				<div class="page_title lunaaqp-title" style="justify-content:flex-start">
					<h1 id="page_title"><?php echo __(utf8_encode("<!--:en-->Songs:<!--:--><!--:es-->Canciones:<!--:-->")); ?></h1>
				</div>
				<ul style="list-style:none; text-align:center; margin:0; padding:0;">
					<li>
						<p style="margin: 0.5rem 0;;"><?php echo __(utf8_encode("<!--:en-->Where do you go, dove? (&#191Palomita, d&#243nde vais?) - Yarav&#237 - Music: Traditional - Lyrics: Mariano Melgar<!--:--><!--:es-->&#191Palomita, d&#243nde vais? - Yarav&#237 - M&#250sica: Tradicional - Letra: Mariano Melgar<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->My Little Dove (Mi pichoncita) - Pampe&#241a/Chancapapas - Music: Oswaldo Lima - Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Mi pichoncita - Pampe&#241a/Chancapapas - M&#250sica: Oswaldo Lima - Letra: Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->El trigal - Marinera - Music: Braulio Choquehuanca - Lyrics: B. Choquehuanca & Vizcarra de V&#237tor<!--:--><!--:es-->El trigal - Marinera - M&#250sica: Braulio Choquehuanca - Letra: B. Choquehuanca y Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->Yo no he venido a llorar - Yarav&#237/Pasacalle -  Music: Traditional - Lyrics: Traditional<!--:--><!--:es-->Yo no he venido a llorar - Yarav&#237/Pasacalle -  M&#250sica: Tradicional - Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->Del Torito - Huaynos -  Music: &#193ngel &#147Torito&#148 Mu&#241oz - Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Del Torito - Huaynos -  M&#250sica: &#193ngel &#147Torito&#148 Mu&#241oz - Letra: Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->T&#250 me enseñaste a querer - Yarav&#237 / Pampe&#241a - Music: Traditional - Lyrics: Traditional<!--:--><!--:es-->T&#250 me ense&#241aste a querer - Yarav&#237 / Pampe&#241a - M&#250sica: Tradicional - Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->Luna arequipe&#241a - Pampe&#241a - Music: Braulio Choquehuanca & Ivan Catacora - Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Luna arequipe&#241a - Pampe&#241a - M&#250sica: Braulio Choquehuanca e Ivan Catacora - Letra: Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->Arrullo de Luna - Yarav&#237 - Music: Pedro Rodr&#237guez - Lyrics: Ver&#243nica Arze<!--:--><!--:es-->Arrullo de Luna - Yarav&#237 - Yarav&#237 - M&#250sica: Pedro Rodr&#237guez - Letra: Ver&#243nica Arze<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->Una palomita - Pampe&#241a - Music: Traditional - Lyrics: Traditional<!--:--><!--:es-->Una palomita - Pampe&#241a - M&#250sica: Tradicional - Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->El cisne - Yarav&#237 -  Music: Traditional - Lyrics: Traditional<!--:--><!--:es-->El cisne - Yarav&#237 -  M&#250sica: Tradicional - Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li>
						<p style="margin: 0.5rem 0;"><?php echo __(utf8_encode("<!--:en-->&#193ngel de Yanahuara - Huayno - Music: Pedro Rodr&#237guez - Lyrics: Pedro Rodr&#237guez<!--:--><!--:es-->&#193ngel de Yanahuara - Huayno - M&#250sica: Pedro Rodr&#237guez - Letra: Pedro Rodr&#237guez<!--:-->")); ?></p>
					</li>
				</ul>
			</div>
			<div class="lungaaqp-content-middle">
			</div>
			<div class="lungaaqp-content-bottom group">
				<div class="luna-aqp-left-column">
					<div style="width:100%; text-align: center;">
						<h3 id="page_title" style="margin:0 0 1rem 0;" ><?php echo __(utf8_encode("<!--:en-->Interpreters<!--:--><!--:es-->Int&#233rpretes<!--:-->")); ?></h3>
					</div>
					<ul style="list-style:none; margin: 0; padding-left: 0; padding-bottom: 1rem;">
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Voice:  KILLARY<!--:--><!--:es-->Voz: Killary<!--:-->")); ?></li>
						<li style="text-align:center;;"><?php echo __(utf8_encode("<!--:en-->Guitars, charangos, mandolins, chilladores & Acordeon: Pedro Rodr&#237guez<!--:--><!--:es-->Guitarras, charangos, mandolinas, chilladores y Acorde&#243n: Pedro Rodr&#237guez<!--:-->")); ?></li>
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Bass:  Mariano Liy & David Ruiz<!--:--><!--:es-->Contrabajos:  Mariano Liy y  David Ruiz<!--:-->")); ?></li>
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Violins: Mar&#237a Elena Pacheco & Meriline Rivero <!--:--><!--:es-->Violines: Mar&#237a Elena Pacheco y Meriline Rivero<!--:-->")); ?></li>
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Viola: Rafael Gargate<!--:--><!--:es-->Viola: Rafael Gargate<!--:-->")); ?></li>
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Cello: C&#233sar Pacheco<!--:--><!--:es-->Cello: C&#233sar Pacheco<!--:-->")); ?></li>
					</ul>
				</div>
				<div class="separador-vertical">
					<img src="<?php echo get_template_directory_uri().'/images/Killary-Separador-Vertical.png'; ?>">
				</div>
				<div class="luna-aqp-right-column">
					<div style="width:100%; text-align: center;">
						<h3 id="page_title" style="margin:0 0 1rem 0;"><?php echo __(utf8_encode("<!--:en-->Technical:<!--:--><!--:es-->T&#233cnica:<!--:-->")); ?></h3>
					</div>
					<ul style="list-style:none; margin: 0; padding-left: 0; padding-bottom: 1rem;">
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Recording and Mixing: Omar R&#225ez<!--:--><!--:es-->Grabaci&#243n y Mezcla: Omar R&#225ez<!--:-->")); ?></li>
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Mastering: Jos&#225 Carlos Ponce<!--:--><!--:es-->Masterizaci&#243n: Jos&#233 Carlos Ponce<!--:-->")); ?></li>
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Musical production and Arrangements: Pedro Rodr&#237guez<!--:--><!--:es-->Producci&#243n musical y arreglos: Pedro Rodr&#237guez<!--:-->")); ?></li>
						<li style="text-align:center;"><?php echo __(utf8_encode("<!--:en-->Executive Production: AGUARDIENTE PRODUCCIONES<!--:--><!--:es-->Producci&#243n ejecutiva: AGUARDIENTE PRODUCCIONES<!--:-->")); ?></li>
						<li style="text-align:center;">2017</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>