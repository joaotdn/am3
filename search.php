<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

	<div id="page" role="main" class="small-12 float-left">

		<div id="archive-page" class="row">

<!--			<header class="search-query small-12 columns">-->
<!--				<h2>--><?php //_e( 'Search Results for', 'foundationpress' ); ?><!-- "--><?php //echo get_search_query(); ?><!--"</h2>-->
<!--			</header>-->

			<nav class="small-12 columns">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<article class="main-content small-12 float-left">
							<header id="post-header">

<!--								<figure class="feature-thumb small-12 float-left">-->
<!--									<img src="--><?php //getThumbUrl('large'); ?><!--" alt="" class="small-12">-->
<!--								</figure>-->

								<div class="small-12 float-left entry-meta">
									<h4>
										<span><time pubdate><?php the_time('d\.m\.Y'); ?></time></span>

										<span>
								<a href="<?php the_permalink(); ?>#disqus_thread"><i class="mkdf-icon-font-elegant icon_comment"></i></a> <?php comments_number( '0', '1', '%' ); ?>
							</span>

										<span>
								<i class="icon_tags"></i>
											<?php
											$categories = wp_get_post_categories($post->ID);
											$i = 0;
											foreach ($categories as $category) {
												$i++;
												$cat = get_category($category);
												$category_link = get_category_link( $cat->term_id );
												$category_name = $cat->name;
												echo '<a href="'. $category_link .'" title="Todos os posts em '. $category_name .'">'. $category_name .'</a>';
												if($i < count($categories))
													echo ', ';
											}
											?>
							</span>
									</h4>
								</div>
								<h2 class="entry-title">
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h2>
							</header>

							<div class="entry-content">
								<?php the_content(__( 'Continue lendo', 'foundationpress' ), true); ?>
							</div>

							<footer id="archive-footer" class="small-12 float-left">
								<div class="float-left">
									<figure class="float-left">
										<div class="thumbnail">
											<?php
											$author_id = get_the_author_meta('id');
											echo get_avatar( $author_id, 40 );
											?>
										</div>
									</figure>
									<h6 class="float-left">Por <a href="<?php echo get_author_posts_url( $author_id ); ?>"><?php echo nl2br(get_the_author_meta('first_name')) . ' ' . nl2br(get_the_author_meta('last_name')); ?></a></h6>
								</div>

								<ul class="menu small-12 large-3 float-right post-share">
									<li>
										<strong>Compartilhe</strong>
									</li>
									<li>
										<a href="#" onclick="window.open('http://www.facebook.com/sharer/sharer.php?s=100&p[title]=<?php  the_title(); ?>[summary]=<?php the_excerpt(); ?>[url]=<?php the_permalink(); ?>[images][0]=<?php getThumbUrl('home.blog'); ?>', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
											<i class="mkdf-social-network-icon social_facebook"></i>
										</a>
									</li>

									<li>
										<a href="#" onclick="window.open('http://twitter.com/home?status=<?php the_permalink(); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
											<i class="mkdf-social-network-icon social_twitter"></i>
										</a>
									</li>

									<li>
										<a href="#" onclick="popUp=window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
											<i class="mkdf-social-network-icon social_googleplus"></i>
										</a>
									</li>

									<li>
										<a href="#" onclick="popUp=window.open('http://linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php  the_title(); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false;">
											<i class="mkdf-social-network-icon social_linkedin"></i>
										</a>
									</li>
								</ul>
							</footer>

						</article>
					<?php endwhile; ?>
				<?php endif; ?>
			</nav>
		</div>
	</div>

<?php get_footer();
