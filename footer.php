<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
		<div id="footer-container" class="small-12 float-left section">

			<footer id="footer" class="row">
				<?php do_action( 'foundationpress_before_footer' ); ?>

					<div class="small-12 medium-4 columns footer-section">

						<figure class="small-12 float-left">
							<a href="<?php echo home_url(); ?>" title="Página principal">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_am3white.png" alt="" width="150">
							</a>

							<figcaption class="small-12 float-left">
								<?php if(get_field('am3_telefone', 'option')): ?>
								<p>
									<i class="mkdf-icon-font-awesome fa fa-phone"></i> <?php echo get_field('am3_telefone', 'option'); ?>
								</p>
								<?php endif; ?>

								<?php if(get_field('am3_endereco', 'option')): ?>
									<p class="no-margin">
										<i class="mkdf-icon-font-awesome fa fa-map-marker"></i> <?php echo get_field('am3_endereco', 'option'); ?>
									</p>
								<?php endif; ?>
							</figcaption>
						</figure>

					</div>

				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>

		</div>

		<div id="credits" class="small-12 float-left">
			<div class="row">
				<div class="small-12 columns">
					<p class="float-left">
						AM3 Soluções - <?php echo date('Y'); ?>. Todos os diretos reservados.
					</p>

					<ul class="menu float-right social rodape show-for-medium">
						<?php get_template_part( 'template-parts/social-links' ); ?>
					</ul>
				</div>
			</div>
		</div>

		<a href="#" class="go-top">
			<i class="mkdf-icon-font-elegant arrow_carrot-up"></i>
		</a>

		<?php do_action( 'foundationpress_layout_end' ); ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
	document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.2'><\/script>".replace("HOST", location.hostname));
	//]]></script>

</body>
</html>
