	<footer>
		<div class="footer-mail">
				<a href="mailto:info@killaryperu.com">INFO@KILLARYPERU.COM</a>
		</div>
		<div class="contact-form">
			<?php 
				if ( qtranxf_getLanguage() == 'es' ) {
					echo do_shortcode('[contact-form-7 id="155" title="Formulario de Contacto"]');
     	  }
    		elseif ( qtranxf_getLanguage() == 'en' ) {
    			echo do_shortcode('[contact-form-7 id="43" title="Contact Form"]');
    		}
    	?>
		</div>
		<div class="footer-logo">
			<img id="footer-logo" src="<?php echo get_template_directory_uri().'/images/logo killary purple.png'; ?>">
		</div>
		<div class="footer-social">
			<a href="https://www.youtube.com/channel/UCzOxdPXjdXNSpI-lf-etE4w" target="_blank"><i class="fa fa-youtube fa-3x iconosrs" aria-hidden="true"></i></a>
			<a href="https://instagram.com/killaryperufolk" target="_blank"><i class="fa fa-instagram fa-3x iconosrs" aria-hidden="true"></i></a>
			<a href="https://www.facebook.com/killaryperufolk" target="_blank"><i class="fa fa-facebook-square fa-3x iconosrs" aria-hidden="true"></i></a>
			<a href="https://plus.google.com/b/104913230392088304644/104913230392088304644/" target="_blank"><i class="fa fa-google-plus-official fa-3x iconosrs" aria-hidden="true"></i></a>
			<a href="https://twitter.com/KILLARYPERUFOLK" target="_blank"><i class="fa fa-twitter fa-3x iconosrs" aria-hidden="true"></i></a>
		</div>
		<div class="footer-musicApps">
			<a href="https://play.spotify.com/artist/1tA8k3FMK9hcADlblJjA0p" target="_blank"><i class="fa fa-spotify fa-3x iconosrs" aria-hidden="true"></i></a>
			<a href="https://soundcloud.com/killaryperufolk" target="_blank"><i class="fa fa-soundcloud fa-3x iconosrs" aria-hidden="true"></i></a>
			<a href="http://www.deezer.com/artist/6605930" target="_blank"><img class="imgrs" src="<?php echo get_template_directory_uri().'/images/deezer.png'; ?>" aria-hidden="true"></a>
			<a href="https://play.google.com/store/music/artist/Killary?id=Agyfl4d4bebwijmyvyyfkif4baa" target="_blank"><img class="imgrs" src="<?php echo get_template_directory_uri().'/images/googleplay.png'; ?>" aria-hidden="true"></a>
			<a href="https://itunes.apple.com/pe/artist/killary/id919433152" target="_blank"><img class="imgrs" src="<?php echo get_template_directory_uri().'/images/itunes.png'; ?>" aria-hidden="true"></a>
		</div>
		<div class="footer-nav">
			<?php wp_nav_menu( array('footer-menu' => 'Menu Principal' )); ?>
		</div>
		<div class="footer-bottom">
			<div class='footer-bottom-left'>
				<p class='footer-bot'>Copyright &copy; <?=date('Y');?> <?php bloginfo('name'); ?>. Todos los derechos reservados</p>
			</div>
			<div class='footer-bottom-right'>
				<p class='footer-bot'>Desarrollado por <a href="https://pe.linkedin.com/in/alfredohvasqueza" target="_blank"><strong>Alfredo Vásquez</strong></a></p>
			</div>	
		</div>	
	</footer>
<?php wp_footer(); ?>
</body>
</html>