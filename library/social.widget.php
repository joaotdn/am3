<?php

class social_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'social_widget',

			__('Redes Sociais', 'foudationpress'),

			array( 'description' => __( 'Últimas notícias do blog', 'foudationpress' ), )
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		?>
		<ul class="menu vertical social widget-links">
			<?php get_template_part( 'template-parts/social-links' ); ?>
		</ul>
		<?php
		echo $args['after_widget'];
	}


	public function form( $instance ) {

		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Título', 'foudationpress' );
		}

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}


	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

function social_load_widget() {
	register_widget( 'social_widget' );
}
add_action( 'widgets_init', 'social_load_widget' );
