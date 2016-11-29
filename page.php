<?php
get_header();
global $post;
?>

	<div id="single-post" role="main" class="small-12 float-left">

		<div class="row">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					if(is_page('contato') && get_field('am3_mapa', 'option'))
						echo '<div class="small-12 columns am3-map">'. get_field('am3_mapa', 'option') .'</div>';
				?>

				<article id="post-<?php the_ID(); ?>" class="small-12 medium-8 columns end <?php if(is_page('contato')) echo 'contact-page'; ?>">

					<header id="post-header">
						<h2 class="entry-title"><?php the_title(); ?></h2>
					</header>

					<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

					<div class="entry-content">
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Editar', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
					</div>

				</article>
			<?php endwhile;?>

			<?php
				if(!is_page('contato'))
					get_sidebar();
			?>
		</div>

	</div>

<?php get_footer();
