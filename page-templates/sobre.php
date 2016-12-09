<?php
/*
Template Name: Sobre
*/
get_header();
?>

<?php if( have_rows('sobre_layout_content') ): while ( have_rows('sobre_layout_content') ) : the_row(); ?>

	<?php
		/**
		 * TEXTO SIMPLES
		 * ===============================================================
		 */
		if( get_row_layout() == 'texto_simples' ):
	?>
	<section class="section-text-simple small-12 float-left">

		<div class="row">
			<article class="small-12 medium-8 medium-offset-2 columns text-center vh wow fadeInUp">
				<div class="content small-12">

					<header>
						<h3 class="text-up"><?php the_sub_field('sobre_texto_simples_cabecalho'); ?></h3>
					</header>
					<p><?php the_sub_field('sobre_texto_simples_paragrafo'); ?></p>

				</div>
			</article>
		</div>

	</section>
	<?php
	/**
	 * TEXTO COM IMAGEM
	 * ===============================================================
	 */
	elseif( get_row_layout() == 'texto_imagem' ): ?>

	<section class="text-img small-12 float-left rel">
		<div class="row full-height rel">

			<article class="small-12 medium-6 column text-center medium-text-left">
				<header class="vh wow fadeIn" data-wow-delay="0.5s">
					<h3 class="font-title"><?php the_sub_field('texto_imagem_cabecalho'); ?></h3>
				</header>
				<p class="vh wow fadeInLeft"><?php the_sub_field('texto_imagem_texto'); ?></p>

				<?php
					if(get_sub_field('texto_imagem_link')):
				?>
				<p class="no-margin vh wow fadeIn">
					<a href="<?php the_sub_field('texto_imagem_link'); ?>" title="<?php the_sub_field('texto_imagem_botao'); ?>" class="button"><?php the_sub_field('texto_imagem_botao'); ?></a>
				</p>
				<?php endif; ?>
			</article>
			<?php
				if(get_sub_field('texto_imagem_imagem')) { echo '<img src="'. get_sub_field('texto_imagem_imagem') .'" alt="" class="vh wow slideInRight">'; }
			?>
		</div>

	</section>

	<?php
	/**
	 * LISTA COM IMAGENS
	 * ===============================================================
	 */
	elseif( get_row_layout() == 'lista_imagem' ): ?>

	<section class="lista-servicos lista-img small-12 float-left section">
		<div class="row small-up-1 medium-up-2 large-up-4">
			<?php
				if( have_rows('lista_imagem_itens') ):
					while ( have_rows('lista_imagem_itens') ) : the_row();
						$titulo = get_sub_field('lista_imagem_item_titulo');
						$texto = get_sub_field('lista_imagem_item_texto');
						$imagem = get_sub_field('lista_imagem_item_imagem');
			?>
			<figure class="column text-center vh wow zoomIn">
				<img src="<?php echo $imagem; ?>" alt="<?php echo $titulo; ?>">
				<figcaption class="small-12 float-left">
					<h3><?php echo $titulo; ?></h3>
					<p><?php echo $texto; ?></p>
				</figcaption>
			</figure>
			<?php
				endwhile; endif;
			?>
		</div>
	</section>

	<?php
	/**
	 * TÓPICOS
	 * ===============================================================
	 */
	elseif( get_row_layout() == 'lista_topicos' ): ?>
		<section class="lista-topicos small-12 float-left section">

			<header class="small-12 medium-6 medium-offset-3 columns text-center vh wow fadeIn" data-wow-delay="0.5s">
				<h3 class="font-title"><?php the_sub_field('lista_topicos_cabecalho'); ?></h3>
				<?php if(get_sub_field('lista_topicos_intro')) echo '<p>'. get_sub_field('lista_topicos_intro') .'</p>'; ?>
			</header>

			<div class="row small-up-1 medium-up-2 large-up-3">
				<?php
				$i = 0;
				if( have_rows('lista_topicos_itens') ):
					while ( have_rows('lista_topicos_itens') ) : the_row();
						$titulo = get_sub_field('lista_topicos_item_titulo');
						$texto = get_sub_field('lista_topicos_item_texto');
						$icone = get_sub_field('lista_topicos_item_icone');
				?>
				<div class="media-object column vh wow zoomIn" data-wow-delay="<?php echo $i; ?>s">
					<div class="media-object-section">
						<div class="thumbnail icon-topico">
							<i class="fa <?php echo $icone; ?>"></i>
						</div>
					</div>
					<div class="media-object-section">
						<h4><?php echo $titulo; ?></h4>
						<p><?php echo $texto; ?></p>
					</div>
				</div>
				<?php
					$i = $i + 0.1; endwhile; endif;
				?>
			</div>
		</section>

		<?php
		/**
		 * PESSOAS
		 * ===============================================================
		 */
		elseif( get_row_layout() == 'lista_pessoas' ): ?>
		<section class="list-pessoas small-12 float-left section">
			<div class="row vh wow slideInLeft" data-wow-delay="0.5s">
				<header class="small-12 medium-6 medium-offset-3 text-center white">
					<?php if(get_sub_field('lista_pessoas_cabecalho')) echo '<h3 class="font-title white">'. get_sub_field('lista_pessoas_cabecalho') .'</h3>'; ?>
					<?php if(get_sub_field('lista_pessoas_intro')) echo '<p>'. get_sub_field('lista_pessoas_intro') .'</p>'; ?>
				</header>

				<?php
				if( have_rows('lista_pessoas_itens') ):
					while ( have_rows('lista_pessoas_itens') ) : the_row();
						$foto = get_sub_field('lista_pessoas_item_foto');
						$nome = get_sub_field('lista_pessoas_item_nome');
						$cargo = get_sub_field('lista_pessoas_item_cargo');
						$bio = get_sub_field('lista_pessoas_item_bio');
						$twitter = get_sub_field('lista_pessoas_item_twitter');
						$facebook = get_sub_field('lista_pessoas_item_facebook');
						$google_plus = get_sub_field('lista_pessoas_item_google_plus');
				?>
				<div class="pessoa-card small-12 medium-6 large-4 columns text-center">
					<?php
						if($foto)
							echo '<img src="'. $foto .'" width="100">';
					?>

					<div class="small-12 float-left">
						<h4><?php echo $nome; ?></h4>
						<p class="role"><?php echo $cargo; ?></p>
						<p><?php echo $bio; ?></p>
					</div>

					<nav class="social-pessoa text-center">
						<ul class="menu d-iblock">
							<?php
								if($twitter)
									echo '<li><a href="'. $twitter .'" title="" class="fa fa-twitter" target="_blank"></a></li>';

								if($facebook)
									echo '<li><a href="'. $facebook .'" title="" class="fa fa-facebook-f" target="_blank"></a></li>';

								if($google_plus)
									echo '<li><a href="'. $google_plus .'" title="" class="mkdf-social-icon-widget social_googleplus" target="_blank"></a></li>';
							?>
						</ul>
					</nav>
				</div>
				<?php
					endwhile; endif;
				?>
			</div>
		</section>

		<?php
		/**
		 * BOX COM BOTÃO
		 * ===============================================================
		 */
		elseif( get_row_layout() == 'texto_botao' ): ?>
		<section class="box-btn small-12 float-left">
			<div class="row">
				<div class="small-12 medium-8 columns float-left text-center medium-text-left vh wow slideInLeft" data-wow-delay="0.4s">
					<h3><?php the_sub_field('texto_botao_cabecalho'); ?></h3>
					<p><?php the_sub_field('texto_botao_intro'); ?></p>
				</div>

				<div class="small-12 medium-4 columns float-left text-center medium-text-right vh wow fadeIn" data-wow-delay="0.5s">
					<?php if(get_sub_field('texto_botao_link')) echo '<a href="'. get_sub_field('texto_botao_link') .'" class="button bgwhite">'. get_sub_field('texto_botao_botao') .'</a>'; ?>
				</div>
			</div>
		</section>

	<?php else: endif; ?>


	<?php endwhile; endif; ?>

<?php get_footer();
