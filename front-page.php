<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<div id="main">
	<div class="foto_Killary">
		<img id="Killary" src="<?php echo get_template_directory_uri().'/images/foto-killary.jpg'; ?>">
	</div>
	<div class="col-lg-8">
			
	</div>
	<div class="col-lg-4">
			
	</div>
</div>
<section id="contact">
	<form action="getform.php" method="get">
    	<label>E-mail: <input type="email" /></label><br />
    	<label>Mensaje:	<textarea name="textarea">Write something here</textarea></label><br />
		<input type="submit" value="Submit" />
	</form>
</section>
<!-- Archivo de barra lateral por defecto -->
<!--<?php get_sidebar(); ?>-->
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>