<?php
$automatizar = get_field('am3_automatizar_titulo', 'option');
$vantagens = get_field('am3_automatizar_vantagens', 'option');
if($automatizar):
	?>
	<section id="home-automtizar" class="small-12 float-left section">
		<div class="row">

			<figure class="small-12 medium-6 columns show-for-medium vh wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="100">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/automatizar.png" alt="">
			</figure>

			<article class="small-12 medium-6 columns vh wow fadeIn" data-wow-delay="0.5s" data-wow-offset="100">
				<header>
					<h2><?php echo $automatizar; ?></h2>
				</header>
				<p><?php echo get_field('am3_automatizar_resumo', 'option'); ?></p>

				<?php
				if($vantagens):
					?>
					<ul>
						<?php
						foreach ($vantagens as $vantagen)
							echo '<li>'. $vantagen['am3_automatizar_vantagem'] .'</li>';
						?>
					</ul>
				<?php endif; ?>
			</article>

		</div>
	</section>
<?php endif; ?>
