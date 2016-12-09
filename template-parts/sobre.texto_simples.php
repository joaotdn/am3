<?php if( get_row_layout() == 'texto_simples' ): ?>
<section id="section-text-simple" class="small-12 float-left">

	<div class="row">
		<article class="small-12 medium-8 medium-offset-2 columns text-center">
			<div class="content small-12">
					<header>
						<h3 class="text-up"><?php the_sub_field('sobre_texto_simples_cabecalho'); ?></h3>
					</header>
					<p><?php the_sub_field('sobre_texto_simples_paragrafo'); ?></p>
			</div>
		</article>
	</div>

</section>
<?php endif; ?>
