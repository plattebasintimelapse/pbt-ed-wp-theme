<?php
/**
 * NEED TO REDO THIS
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'partials/content', get_field('lesson_format') ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>