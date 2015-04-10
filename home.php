<?php
/**
 * The template for displaying the front page.
 */

get_header(); ?>

	<div class="container main-container">
		<div class="row">
			<?php
				$args = array(
					'post_type' => 'page',
					'post_status' => 'publish',
					'meta_query' => array(
			            array(
			                'key' => '_wp_page_template',
			                'value' => 'page-collection.php',
			            )
			        )
				);
				$the_query = new WP_Query( $args);

				// The Loop
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>

						<div class="col-sm-6">
							<a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1>
								<?php the_post_thumbnail(); ?></a>
						</div>
					<?php }
				} else {
					// no posts found
				}
				wp_reset_postdata();
			?>
		</div>
	</div>

<?php get_footer(); ?>