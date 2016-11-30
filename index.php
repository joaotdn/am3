<?php
get_header();
?>

<div id="page" role="main">
	<?php
		/**
		 * Slider
		 */
		get_template_part( 'template-parts/home.slider' );

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
