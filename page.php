<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header(); ?>

	<div class="container main-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			</article><!-- #post-## -->

		<?php endwhile; ?>
		
	</div>

<?php get_footer(); ?>
