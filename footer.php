<footer>
		<div class="col-lg-4 footer-left">
				<img id="flores" src="<?php echo get_template_directory_uri().'/images/flores.png'; ?>">
		</div>
		<div class="col-lg-4 footer-center">
			<ul class="footer-nav">
				<?php wp_nav_menu( array('footer-menu' => 'Menu Principal' )); ?>
			</ul>
			
		</div>
		<div class="col-lg-4 footer-right">
			<div class="footer-logo">
				<img id="footer-logo" src="<?php echo get_template_directory_uri().'/images/logo killary.png'; ?>">
			</div>
			<div class="footer-social">
				<a href="https://www.youtube.com/channel/UCnbepXk3tvd4CKGN03VdIlg/videos" target="_blank"><i class="fa fa-youtube fa-3x iconosrs" aria-hidden="true"></i></a>
				<a href="#" target="_blank"><i class="fa fa-instagram fa-3x iconosrs" aria-hidden="true"></i></a>
				<a href="https://www.facebook.com/aguardienteproducciones" target="_blank"><i class="fa fa-facebook-square fa-3x iconosrs" aria-hidden="true"></i></a>
				<a href="#" target="_blank"><i class="fa fa-google-plus-square fa-3x iconosrs" aria-hidden="true"></i></a>
				<a href="#" target="_blank"><i class="fa fa-twitter-square fa-3x iconosrs" aria-hidden="true"></i></a>
				<a href="#" target="_blank"><i class="fa fa-spotify fa-3x iconosrs" aria-hidden="true"></i></a>
			</div>
			<div class="footer-mail">
				<a href="mailto:info@killaryperufolk.pe"><i class="fa fa-envelope" aria-hidden="true"></i> info@killaryperufolk.pe</a>
			</div>
		</div>
		<div class="col-lg-12 copyright">
			<small>Aguaymanto © <?php echo date("Y") ?></small>
		</div>
	</footer>
</body>
</html>