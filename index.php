<?php
get_header();
?>

<div id="page" role="main">

	<div id="slider-revolution-am3" class="small-12 float-left">
		<?php
		/**
		 * Slider Revolution
		 */
		echo do_shortcode( '[rev_slider alias="original-home"]' );
		?>
	</div>

	<?php
		/**
		 * Lista de serviços
		 */
		get_template_part( 'template-parts/home.lista-servicos' );

		/**
		 * Sobre nós
		 */
		get_template_part( 'template-parts/home.sobre-nos' );

		/**
		 * Por que automatizar
		 */
		get_template_part( 'template-parts/home.automatizar' );

		/**
		 * Depoimentos
		 */
		get_template_part( 'template-parts/home.depoimentos' );

		/**
		 * Ajuda
		 */
		get_template_part( 'template-parts/home.ajuda' );

		/**
		 * Blog
		 */
		get_template_part( 'template-parts/home.blog' );
	?>

</div>

<?php get_footer();
