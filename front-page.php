<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<div id="main" class="row">
	<div class="foto_Killary">
		<img id="Killary" src="<?php echo get_template_directory_uri().'/images/foto-killary.jpg'; ?>">
	</div>
	<div class="col-lg-8">
		<?php echo do_shortcode('[youtube_channel]'); ?>
	</div>
	<div class="col-lg-4">
		<?php echo do_shortcode('[custom-facebook-feed]'); ?>
	</div>
</div>
<div class="row">
	<div id="contact col-lg-12">
		<form action="getform.php" method="get">
	    	<label>E-mail: <input type="email" /></label><br />
	    	<label>Mensaje:	<textarea name="textarea">Write something here</textarea></label><br />
			<input type="submit" value="Submit" />
		</form>
	</div>
</div>
<!-- Archivo de barra lateral por defecto -->
<!--<?php get_sidebar(); ?>-->
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>