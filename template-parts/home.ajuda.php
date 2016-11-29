<?php
$ajuda = get_field('am3_ajuda_link', 'option');
if($ajuda):
	?>
	<section id="home-ajuda" class="small-12 float-left section vh wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="50">
		<div class="row">

			<header class="small-12 columns text-center">
				<h1><?php echo get_field('am3_ajuda_titulo', 'option'); ?></h1>
				<p><?php echo get_field('am3_ajuda_texto', 'option'); ?></p>
				<p class="no-margin">
					<strong><a href="<?php echo get_field('am3_ajuda_link', 'option'); ?>" class="button no-margin"><?php echo get_field('am3_ajuda_botao', 'option'); ?></a></strong>
				</p>
			</header>

		</div>
	</section>
	<?php
endif;
?>
