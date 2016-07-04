<?php //Template Name: Bio-Page
get_header();  ?>
<div id="main" class="row">
	<div class="bio-title col-lg-12">
		<h1>Biography</h1>
	</div>
	<div class="bio-photo col-lg-4">
		<img id="Bio-Killary" src="<?php echo get_template_directory_uri().'/images/foto-bio-killary.jpg'; ?>">
	</div>
	<div class="bio-text col-lg-4">
		<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
	</div>
	<div class="col-lg-4">
		<?php echo do_shortcode('[custom-facebook-feed]'); ?>
	</div>
</div>
<?php get_footer(); ?>