<?php //Template Name: LunaAQP-Page
  get_header(); ?>
	<header>
 	   <h1 class="site-title col-sm-9"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  </header>
	<!-- Contenido de página de inicio -->
	 <div id="page-header-photo">
    <div class="page-header-photos">
      <div id="Home_Killary" style="background-position-y: 7%;"></div>
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
			<div class="luna-mobile">
				<div class="logo-luna">
					<img id="logo-luna" src="<?php echo get_template_directory_uri().'/images/logo_luna_aqp.png'; ?>">
				</div>
				<div class="parrafo1-aqp">
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->MOON OF AREQUIPA is my first arequipan music album and it is a tribute to my home town, the peruvian city of Arequipa<!--:--><!--:es-->LUNA AREQUIPE&#209A es mi primer disco de m&#250sica arequipe&#241a y es un homenaje a mi tierra natal, Arequipa.<!--:-->")); ?></p>
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->The album has only songs from the genres of arequipan folklore: Yarav&#237es, marineras, huaynos and pampe&#241as. And each one of the songs has a special meanig to me. For example, &#147My Little Dove&#148 (Mi Pichoncita) is a song by &#147Los Mistianos&#148 that I hummed along as a child and &#147Moon of Arequipa&#148 (Luna Arequipe&#241a) is a new Pampe&#241a (folkloric genre) that is dedicated to my daughter.<!--:--><!--:es-->El disco contiene &#250nicamente temas de folklore arequipe&#241o: Yarav&#237es, marineras, huaynos y pampe&#241as. Y cada una de las canciones tiene un significado especial para mi. Por ejemplo, &#147Mi Pichoncita&#148 es una canci&#243n de &#147Los Mistianos&#148 que yo ya tarareaba de ni&#241a y &#147Luna Arequipe&#241a&#148 es una nueva pampe&#241ita que est&#225 dedicada a mi hija.<!--:-->")); ?></p>
				</div> 
				<div class="parrafo2-aqp">
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->As it is with any gift, it is given with love and &#147Moon of Arequipa&#148 is an album that I have long wanted to give to my home town and to all the followers in Per&#250 and around the world. The musical production and all arrangements are a terrific work by Pedro Rodr&#237guez, a great friend as well as a young and muti-awarded composer from Arequipa.<!--:--><!--:es-->Como todo regalo, se hace con cari&#241o y Luna Arequipe&#241a es un disco que hace mucho tiempo quiero regalarle a mi tierra y al p&#250blico de todo el Per&#250 y el Mundo. La producci&#243n musical del disco y todos los arreglos son una joya obra de Pedro Rodr&#237guez, un gran amigo y un joven multipremiado compositor arequipe&#241o.<!--:-->")); ?></p>
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->The album is set to be released in June 2017.  Soon you will be able to hear it!<!--:--><!--:es-->El disco est&#225 programado para junio del 2017. &#161Ya pronto lo podr&#225n escuchar!<!--:-->")); ?></p>
					<p class="lunaaqp-txt">KILLARY</p>
				</div>
				<h3 style="font-weight:bold; font-family:'Anke'; text-align:center;"><?php echo __(utf8_encode("<!--:en-->Songs:<!--:--><!--:es-->Canciones:<!--:-->")); ?></h3>
				<ul style="list-style:none; padding:0; margin:0;">
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->Where do you go, dove? (&#191Palomita, d&#243nde vais?)<!--:--><!--:es-->&#191Palomita, d&#243nde vais?<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Yarav&#237 - Music: Traditional<!--:--><!--:es-->Yarav&#237 - M&#250sica: Tradicional<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Mariano Melgar<!--:--><!--:es-->Letra: Mariano Melgar<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->My Little Dove (Mi pichoncita)<!--:--><!--:es-->Mi pichoncita<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Pampe&#241a/Chancapapas - Music: Oswaldo Lima<!--:--><!--:es-->Pampe&#241a/Chancapapas - M&#250sica: Oswaldo Lima<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Letra: Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->El trigal<!--:--><!--:es-->El trigal<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Marinera - Music: Braulio Choquehuanca<!--:--><!--:es-->Marinera - M&#250sica: Braulio Choquehuanca<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: B. Choquehuanca & Vizcarra de V&#237tor<!--:--><!--:es-->Letra: B. Choquehuanca y Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->Yo no he venido a llorar<!--:--><!--:es-->Yo no he venido a llorar<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Yarav&#237/Pasacalle -  Music: Traditional<!--:--><!--:es-->Yarav&#237/Pasacalle -  M&#250sica: Tradicional<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Traditional<!--:--><!--:es-->Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->Del Torito<!--:--><!--:es-->Del Torito<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;">><?php echo __(utf8_encode("<!--:en-->Huaynos -  Music: &#193ngel &#147Torito&#148 Mu&#241oz<!--:--><!--:es-->Huaynos -  M&#250sica: &#193ngel &#147Torito&#148 Mu&#241oz<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Letra: Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->T&#250 me enseñaste a querer<!--:--><!--:es-->T&#250 me ense&#241aste a querer<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Yarav&#237 / Pampe&#241a - Music: Traditional<!--:--><!--:es-->Yarav&#237 / Pampe&#241a - M&#250sica: Tradicional<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Traditional<!--:--><!--:es-->Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->Luna arequipe&#241a<!--:--><!--:es-->Luna arequipe&#241a<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Pampe&#241a - Music: Braulio Choquehuanca & Ivan Catacora<!--:--><!--:es-->Pampe&#241a - M&#250sica: Braulio Choquehuanca e Ivan Catacora<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Letra: Vizcarra de V&#237tor<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->Arrullo de Luna<!--:--><!--:es-->Arrullo de Luna - Yarav&#237<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Yarav&#237 - Music: Pedro Rodr&#237guez<!--:--><!--:es-->Yarav&#237 - M&#250sica: Pedro Rodr&#237guez<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Ver&#243nica Arze<!--:--><!--:es-->Letra: Ver&#243nica Arze<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->Una palomita<!--:--><!--:es-->Una palomita<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Pampe&#241a - Music: Traditional<!--:--><!--:es-->Pampe&#241a - M&#250sica: Tradicional<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Traditional<!--:--><!--:es-->Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->El cisne<!--:--><!--:es-->El cisne<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Yarav&#237 -  Music: Traditional<!--:--><!--:es-->Yarav&#237 -  M&#250sica: Tradicional<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Traditional<!--:--><!--:es-->Letra: Tradicional<!--:-->")); ?></p>
					</li>
					<li style="text-align:center;">
						<p style="text-transform:uppercase; font-weight:bolder; font-style:italic; font-family:'Montserrat-Bold'; margin:0;"><?php echo __(utf8_encode("<!--:en-->&#193ngel de Yanahuara<!--:--><!--:es-->&#193ngel de Yanahuara<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;margin:0;"><?php echo __(utf8_encode("<!--:en-->Huayno - Music: Pedro Rodr&#237guez<!--:--><!--:es-->Huayno - M&#250sica: Pedro Rodr&#237guez<!--:-->")); ?></p>
						<p style="font-family:'ScriptBL';font-weight:normal;"><?php echo __(utf8_encode("<!--:en-->Lyrics: Pedro Rodr&#237guez<!--:--><!--:es-->Letra: Pedro Rodr&#237guez<!--:-->")); ?></p>
					</li>
				</ul>
				<h3 style="font-weight:bold; font-family:'Anke'; text-align:center; margin-top:3rem;"><?php echo __(utf8_encode("<!--:en-->Interpreters<!--:--><!--:es-->Int&#233rpretes<!--:-->")); ?></h3>
					<ul style="list-style:none; margin: 0; padding-left: 0; padding-bottom: 1rem;">
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Voice:  KILLARY<!--:--><!--:es-->Voz: Killary<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Guitars, charangos, mandolins, chilladores & Acordeon: Pedro Rodr&#237guez<!--:--><!--:es-->Guitarras, charangos, mandolinas, chilladores y Acorde&#243n: Pedro Rodr&#237guez<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Bass:  Mariano Liy & David Ruiz<!--:--><!--:es-->Contrabajos:  Mariano Liy y  David Ruiz<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Violins: Mar&#237a Elena Pacheco & Meriline Rivero <!--:--><!--:es-->Violines: Mar&#237a Elena Pacheco y Meriline Rivero<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Viola: Rafael Gargate<!--:--><!--:es-->Viola: Rafael Gargate<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Cello: C&#233sar Pacheco<!--:--><!--:es-->Cello: C&#233sar Pacheco<!--:-->")); ?></li>
					</ul>
					<h3 style="font-weight:bold; font-family:'Anke'; text-align:center; margin-top:3rem;"><?php echo __(utf8_encode("<!--:en-->Technical:<!--:--><!--:es-->T&#233cnica:<!--:-->")); ?></h3>
					<ul style="list-style:none; margin: 0; padding-left: 0; padding-bottom: 1rem;">
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Recording and Mixing: Omar R&#225ez<!--:--><!--:es-->Grabaci&#243n y Mezcla: Omar R&#225ez<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Mastering: Jos&#225 Carlos Ponce<!--:--><!--:es-->Masterizaci&#243n: Jos&#233 Carlos Ponce<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Musical production and Arrangements: Pedro Rodr&#237guez<!--:--><!--:es-->Producci&#243n musical y arreglos: Pedro Rodr&#237guez<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';"><?php echo __(utf8_encode("<!--:en-->Executive Production: AGUARDIENTE PRODUCCIONES<!--:--><!--:es-->Producci&#243n ejecutiva: AGUARDIENTE PRODUCCIONES<!--:-->")); ?></li>
						<li style="text-align:center; font-family:'Montserrat';">2017</li>
					</ul>
			</div>
			<div class="luna-one">
				<div class="parrafo1-aqp">
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->MOON OF AREQUIPA is my first arequipan music album and it is a tribute to my home town, the peruvian city of Arequipa<!--:--><!--:es-->LUNA AREQUIPE&#209A es mi primer disco de m&#250sica arequipe&#241a y es un homenaje a mi tierra natal, Arequipa.<!--:-->")); ?></p>
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->The album has only songs from the genres of arequipan folklore: Yarav&#237es, marineras, huaynos and pampe&#241as. And each one of the songs has a special meanig to me. For example, &#147My Little Dove&#148 (Mi Pichoncita) is a song by &#147Los Mistianos&#148 that I hummed along as a child and &#147Moon of Arequipa&#148 (Luna Arequipe&#241a) is a new Pampe&#241a (folkloric genre) that is dedicated to my daughter.<!--:--><!--:es-->El disco contiene &#250nicamente temas de folklore arequipe&#241o: Yarav&#237es, marineras, huaynos y pampe&#241as. Y cada una de las canciones tiene un significado especial para mi. Por ejemplo, &#147Mi Pichoncita&#148 es una canci&#243n de &#147Los Mistianos&#148 que yo ya tarareaba de ni&#241a y &#147Luna Arequipe&#241a&#148 es una nueva pampe&#241ita que est&#225 dedicada a mi hija.<!--:-->")); ?></p>
				</div> 
				<div class="parrafo2-aqp">
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->As it is with any gift, it is given with love and &#147Moon of Arequipa&#148 is an album that I have long wanted to give to my home town and to all the followers in Per&#250 and around the world. The musical production and all arrangements are a terrific work by Pedro Rodr&#237guez, a great friend as well as a young and muti-awarded composer from Arequipa.<!--:--><!--:es-->Como todo regalo, se hace con cari&#241o y Luna Arequipe&#241a es un disco que hace mucho tiempo quiero regalarle a mi tierra y al p&#250blico de todo el Per&#250 y el Mundo. La producci&#243n musical del disco y todos los arreglos son una joya obra de Pedro Rodr&#237guez, un gran amigo y un joven multipremiado compositor arequipe&#241o.<!--:-->")); ?></p>
					<p class="lunaaqp-txt"><?php echo __(utf8_encode("<!--:en-->The album is set to be released in June 2017.  Soon you will be able to hear it!<!--:--><!--:es-->El disco est&#225 programado para junio del 2017. &#161Ya pronto lo podr&#225n escuchar!<!--:-->")); ?></p>
					<p class="lunaaqp-txt">KILLARY</p>
				</div>
			</div>
			<div class="luna-two">
				<div class="block1-aqp">
					<h3 style="font-weight:bold;"><?php echo __(utf8_encode("<!--:en-->SONGS:<!--:--><!--:es-->CANCIONES:<!--:-->")); ?></h3>
					<ul>
						<li><?php echo __(utf8_encode("<!--:en-->Where do you go, dove? (&#191Palomita, d&#243nde vais?) - Yarav&#237 - Music: Traditional , Lyrics: Mariano Melgar<!--:--><!--:es-->&#191Palomita, d&#243nde vais? - Yarav&#237 - M&#250sica: Tradicional , Letra: Mariano Melgar<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->My Little Dove (Mi pichoncita) - Pampe&#241a/Chancapapas - Music: Oswaldo Lima, Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Mi pichoncita - Pampe&#241a/Chancapapas - M&#250sica: Oswaldo Lima, Letra: Vizcarra de V&#237tor<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->El trigal - Marinera - Music: Braulio Choquehuanca, Music: B. Choquehuanca & Vizcarra de V&#237tor<!--:--><!--:es-->El trigal - Marinera - M&#250sica: Braulio Choquehuanca, Letra: B. Choquehuanca y Vizcarra de V&#237tor<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Yo no he venido a llorar - Yarav&#237/Pasacalle -  Music & Lyrics: Traditional<!--:--><!--:es-->Yo no he venido a llorar - Yarav&#237/Pasacalle -  M&#250sica y Letra: Tradicional<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Del Torito - Huaynos -  Music: &#193ngel &#147Torito&#148 Mu&#241oz, Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Del Torito - Huaynos -  M&#250sica: &#193ngel &#147Torito&#148 Mu&#241oz, Letra: Vizcarra de V&#237tor<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->T&#250 me enseñaste a querer - Yarav&#237 / Pampe&#241a - Music & Lyrics: Traditional<!--:--><!--:es-->T&#250 me ense&#241aste a querer - Yarav&#237 / Pampe&#241a - M&#250sica y Letra: Tradicional<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Luna arequipe&#241a - Pampe&#241a - Music: Braulio Choquehuanca & Ivan Catacora, Lyrics: Vizcarra de V&#237tor<!--:--><!--:es-->Luna arequipe&#241a - Pampe&#241a - M&#250sica: Braulio Choquehuanca e Ivan Catacora, Letra: Vizcarra de V&#237tor<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Arrullo de Luna - Yarav&#237 - Music: Pedro Rodr&#237guez, Lyrics: Ver&#243nica Arze<!--:--><!--:es-->Arrullo de Luna - Yarav&#237 - M&#250sica: Pedro Rodr&#237guez, Letra: Ver&#243nica Arze<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Una palomita - Pampe&#241a - Music & Lyrics: Traditional<!--:--><!--:es-->Una palomita - Pampe&#241a - M&#250sica y Letra: Tradicional<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->El cisne - Yarav&#237 -  Music y Lyrics: Traditional<!--:--><!--:es-->El cisne  - Yarav&#237 -  M&#250sica y Letra: Tradicional<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->&#193ngel de Yanahuara -  Huayno - Music y Lyrics: Pedro Rodr&#237guez<!--:--><!--:es-->&#193ngel de Yanahuara -  Huayno - M&#250sica y Letra: Pedro Rodr&#237guez<!--:-->")); ?></li>
					</ul>
				</div>
				<div class="block2-aqp">
					<h3 style="font-weight:bold;"><?php echo __(utf8_encode("<!--:en-->INTERPRETERS<!--:--><!--:es-->INT&#201RPRETES<!--:-->")); ?></h3>
					<ul style="list-style:none; margin: 0; padding-left: 0; padding-bottom: 1rem;">
						<li><?php echo __(utf8_encode("<!--:en-->Voice:  KILLARY<!--:--><!--:es-->Voz: Killary<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Guitars, charangos, mandolins, chilladores & Acordeon: Pedro Rodr&#237guez<!--:--><!--:es-->Guitarras, charangos, mandolinas, chilladores y Acorde&#243n: Pedro Rodr&#237guez<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Bass:  Mariano Liy & David Ruiz<!--:--><!--:es-->Contrabajos:  Mariano Liy y  David Ruiz<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Violins: Mar&#237a Elena Pacheco & Meriline Rivero <!--:--><!--:es-->Violines: Mar&#237a Elena Pacheco y Meriline Rivero<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Viola: Rafael Gargate<!--:--><!--:es-->Viola: Rafael Gargate<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Cello: C&#233sar Pacheco<!--:--><!--:es-->Cello: C&#233sar Pacheco<!--:-->")); ?></li>
					</ul>
					<h3 style="font-weight:bold;"><?php echo __(utf8_encode("<!--:en-->TECHNICAL:<!--:--><!--:es-->T&#201CNICA:<!--:-->")); ?></h3>
					<ul style="list-style:none; margin: 0; padding-left: 0; padding-bottom: 1rem;">
						<li><?php echo __(utf8_encode("<!--:en-->Recording and Mixing: Omar R&#225ez<!--:--><!--:es-->Grabaci&#243n y Mezcla: Omar R&#225ez<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Mastering: Jos&#225 Carlos Ponce<!--:--><!--:es-->Masterizaci&#243n: Jos&#233 Carlos Ponce<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Musical production and Arrangements: Pedro Rodr&#237guez<!--:--><!--:es-->Producci&#243n musical y arreglos: Pedro Rodr&#237guez<!--:-->")); ?></li>
						<li><?php echo __(utf8_encode("<!--:en-->Executive Production: AGUARDIENTE PRODUCCIONES<!--:--><!--:es-->Producci&#243n ejecutiva: AGUARDIENTE PRODUCCIONES<!--:-->")); ?></li>
						<li>2017</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>