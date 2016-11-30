<div id="slider-revolution-am3" class="small-12 float-left">
	<?php
	$slider_type = get_field('am3_slider_tipo','option');
	$am3_sliders = get_field('am3_sliders','option');
	if($slider_type === 'am3slider' && $am3_sliders):
		?>
		<div id="am3-slider" class="small-12 float-left rel">

			<nav id="slider-content" class="small-12 vhs cycle-slideshow"
					 data-cycle-fx="fade"
					 data-cycle-next=".next-slider"
					 data-cycle-prev=".prev-slider"
					 data-cycle-timeout="6000"
					 data-cycle-slides="> figure"
					 data-cycle-swipe=true
					 data-cycle-swipe-fx=scrollHorz
			>
				<?php
					foreach ($am3_sliders as $slide):
				?>
				<figure class="small-12 float-left rel" style="background-color: <?php echo $slide['am3_slider_cor']; ?>;">
					<div class="row rel">
						<div class="small-12 medium-6 columns slider-text">
							<h1><?php echo $slide['am3_slider_texto_grande']; ?></h1>
							<p><?php echo $slide['am3_slider_texto_pequeno']; ?></p>
							<?php
								if(!empty($slide['am3_slider_texto_btn']))
									echo '<p><strong><a href="'. $slide['am3_slider_link_btn'] .'" title="'. $slide['am3_slider_texto_btn'] .'" class="button">'. $slide['am3_slider_texto_btn'] .'</a></strong></p>';
							?>
						</div>
						<div class="small-12 medium-6 columns slider-thumb <?php echo $slide['am3_slider_pos']; ?> text-center">
							<img src="<?php echo $slide['am3_slider_background']; ?>" alt="">
						</div>
					</div>
					<div class="mask small-12"></div>
				</figure>
				<?php
					endforeach;
				?>
			</nav>

			<div class="slider-loader small-12 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon.png" alt="">
			</div>

			<a href="#" class="nav-slider next-slider fa fa-angle-left"></a>
			<a href="#" class="nav-slider prev-slider fa fa-angle-right"></a>

		</div>
		<?php
	else:
		echo do_shortcode( '[rev_slider alias="original-home"]' );
	endif;
	?>
</div>
