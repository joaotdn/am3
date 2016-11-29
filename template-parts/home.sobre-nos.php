<?php
$sobre = get_field('am3_sobre_titulo', 'option');
if($sobre):
?>
<section id="home-sobre" class="small-12 float-left section text-center" data-magellan-target="home-sobre">
	<div class="row">
		<article class="small-12 columns text-center vh wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="120">
			<header>
				<h1><?php echo $sobre; ?></h1>
			</header>
			<div class="small-12 large-10 large-offset-1 float-left">
				<p><?php echo get_field('am3_sobre_texto', 'option'); ?></p>
			</div>
		</article>
	</div>
</section>
<?php
endif;
?>
