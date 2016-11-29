<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		?>
		<div class="small-12 float-left entry-meta">
			<h4>
				<span><time pubdate><?php the_time('d\.m\.Y'); ?></time></span>

				<span>
								<a href="#post-comments" title="Comentários">
									<i class="mkdf-icon-font-elegant icon_comment "></i> <?php comments_number( '0', '1', '%' ); ?>
								</a>
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
		<?php
	}
endif;
