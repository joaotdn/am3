<?php

class ultimas_noticias extends WP_Widget {

	function __construct() {
		parent::__construct(
			'ultimas_noticias',

			__('Últimas notícias', 'ultimas_noticias_domain'),

			array( 'description' => __( 'Últimas notícias do blog', 'ultimas_noticias_domain' ), )
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		$total = apply_filters( 'widget_total', $instance['total'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		if($total > 0):
			$args = array(
				'posts_per_page' => $total
			);
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() ) :  while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
				<div class="media-object">
					<div class="media-object-section">
						<div class="thumbnail">
							<img src="<?php getThumbUrl('home.blog'); ?>" alt="" class="small-12" width="110">
						</div>
					</div>
					<div class="media-object-section">
						<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
						<p><time pubdate><?php the_time('d\.m\.Y'); ?></time></p>
					</div>
				</div>
		<?php
			endwhile; wp_reset_postdata(); endif;
		endif;
		echo $args['after_widget'];
	}


	public function form( $instance ) {

		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Título', 'ultimas_noticias_domain' );
		}

		if ( isset( $instance[ 'total' ] ) ) {
			$total = $instance[ 'total' ];
		}
		else {
			$total = __( 'Qtd. de notícias', 'ultimas_noticias_domain' );
		}

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'total' ); ?>"><?php _e( 'Qtd. de posts:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'total' ); ?>" name="<?php echo $this->get_field_name( 'total' ); ?>" type="number" value="<?php echo esc_attr( $total ); ?>" />
		</p>
		<?php
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['total'] = ( ! empty( $new_instance['total'] ) ) ? strip_tags( $new_instance['total'] ) : '';
		return $instance;
	}
}

function wpb_load_widget() {
	register_widget( 'ultimas_noticias' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
