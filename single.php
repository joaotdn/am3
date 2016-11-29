<?php
get_header();
global $post;
?>

<div id="single-post" role="main" class="small-12 float-left">

	<div class="row">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" class="small-12 medium-8 columns">

				<header id="post-header">

					<figure class="feature-thumb small-12 float-left">
						<img src="<?php getThumbUrl('full'); ?>" alt="" class="small-12">
					</figure>

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

					<h2 class="entry-title"><?php the_title(); ?></h2>
				</header>

				<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Editar', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
				</div>

				<footer id="post-footer" class="small-12 float-left">
					<?php
						$tags = wp_get_post_tags($post->ID);
						if(count($tags) > 0):
					?>
					<ul class="menu small-12 large-9 float-left post-tags">
						<?php
							foreach ($tags as $tag) {
								echo '<li><strong><a href="'. get_tag_link($tag->term_id) .'" class="button small no-margin">'. $tag->name .'</a></strong></li>';
							}
						?>
					</ul>
					<?php
						endif;
					?>

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

					<div id="post-author" class="small-12 float-left">
						<div class="media-object no-margin">
							<div class="media-object-section">
								<div class="thumbnail">
									<?php
										$author_id = get_the_author_meta('id');
										echo get_avatar( $author_id, 100 );
									?>
								</div>
							</div>
							<div class="media-object-section">

								<h4><a href="<?php echo get_author_posts_url($author_id); ?>"><?php echo nl2br(get_the_author_meta('first_name')) . ' ' . nl2br(get_the_author_meta('last_name')); ?></a></h4>

								<p><?php echo nl2br(get_the_author_meta('description')); ?></p>

								<?php
									$facebook = get_user_meta($author_id, 'facebook')[0];
									$twitter = get_user_meta($author_id, 'twitter')[0];
									$googleplus = get_user_meta($author_id, 'googleplus')[0];
									$linkedin = get_user_meta($author_id, 'linkedin')[0];
								?>

								<ul class="menu">
									<?php
										if($facebook)
											echo '<li><a href="'. $facebook .'" class="mkdf-social-network-icon social_facebook" target="_blank"></a></li>';

										if($twitter)
											echo '<li><a href="'. $twitter .'" class="mkdf-icon-font-elegant social_twitter mkdf-author-social-twitter mkdf-author-social-icon" target="_blank"></a></li>';

										if($googleplus)
											echo '<li><a href="'. $googleplus .'" class="mkdf-social-network-icon social_googleplus" target="_blank"></a></li>';

										if($linkedin)
											echo '<li><a href="'. $linkedin .'" class="mkdf-social-network-icon social_linkedin" target="_blank"></a></li>';
									?>
								</ul>
							</div>
						</div>
					</div>

					<?php comments_template(); ?>
				</footer>

			</article>
		<?php endwhile;?>

		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer();
