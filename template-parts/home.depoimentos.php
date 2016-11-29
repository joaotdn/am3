<?php
$depoimentos = get_field('am3_depoimentos', 'option');
if($depoimentos):
	?>
	<section id="home-depoimentos" class="small-12 float-left section vh wow fadeIn" data-wow-delay="0.5s">
		<div class="row vh wow slideInDown">

			<header class="text-center">
				<h1><?php echo get_field('am3_depo_titulo', 'option'); ?></h1>
			</header>

			<?php
			foreach ($depoimentos as $depoimento):
				?>
				<article class="small-12 medium-6 columns">

					<div class="media-object">
						<div class="media-object-section">
							<div class="thumbnail">
								<img src="<?php echo $depoimento['am3_depoimentos_foto']; ?>" alt="<?php echo $depoimento['am3_depoimentos_autor']; ?>" width="60">
							</div>
						</div>
						<div class="media-object-section">
							<h4 class="no-margin"><?php echo $depoimento['am3_depoimentos_autor']; ?></h4>
							<p><?php echo $depoimento['am3_depoimentos_profissao']; ?></p>
						</div>
					</div>

					<p><?php echo $depoimento['am3_depoimentos_testemunho']; ?></p>

				</article>
				<?php
			endforeach;
			?>

		</div>
	</section>
<?php endif; ?>
