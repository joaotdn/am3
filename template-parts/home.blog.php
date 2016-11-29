<section id="home-blog" class="small-12 float-left section vh wow fadeIn" data-wow-delay="0.5s" data-wow-offset="60">
	<div class="row">

		<header class="text-center">
			<h1>
				Últimas notícias
			</h1>
		</header>

		<?php
		$args = array(
			'posts_per_page' => 3
		);
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post();
			?>
			<article class="small-12 medium-4 columns">

				<figure class="small-12 float-left">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<img src="<?php getThumbUrl('home.blog'); ?>" alt="" class="small-12">
						<figcaption class="small-12 float-left">
							<h2><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
						</figcaption>
					</a>
					<p class="post-data no-margin">
						<span>
							<time pubdate><?php the_time('d\.m\.Y'); ?></time>
						</span>
<!--						<span>-->
<!--							<a href="#"><i class="icon_heart"></i> 0</a>-->
<!--						</span>-->
						<span>
							<a href="<?php the_permalink(); ?>#disqus_thread"><i class="mkdf-icon-font-elegant icon_comment"></i></a> <?php comments_number( '0', '1', '%' ); ?>
						</span>
					</p>
				</figure>

			</article>
			<?php
		endwhile; wp_reset_postdata(); endif;
		?>

	</div>
</section>
