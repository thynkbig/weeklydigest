<?php
function avada_child_scripts() {
	if ( ! is_admin() && ! in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) ) ) {
		$theme_info = wp_get_theme();
		wp_enqueue_style( 'avada-child-stylesheet', get_template_directory_uri() . '/style.css', array(), $theme_info->get( 'Version' ) );
	}
}
add_action('wp_enqueue_scripts', 'avada_child_scripts');


if ( ! function_exists('homepage_list')) {
	function homepage_list() {
		echo '<div class="list">';
			$args = array (	'category_name'      => 'digest' );
			$stories = new WP_Query( $args );

			if ( $stories->have_posts()) {
				echo '<ul class="post-list">';
					while ( $stories->have_posts() ) {
						$stories->the_post();
							echo '<li class="post-list-item">'; ?>
								<a class="link" href="<?php echo get_permalink() ?>">
									<p><?php echo get_the_title($post->ID); ?></p>
								</a>
							<?php echo '</li>';
					}

				echo '</ul>';
			}
		echo '</div>';
	}
}