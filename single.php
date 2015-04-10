<?php
/**
 * The template for displaying a single story.
 */

get_header(); ?>

	<div class="container main-container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

				<h1><?php the_title(); ?></h1>

				<?php if ( get_field('lesson_format') == 'interactive' ) { ?>
					<iframe width="100%" height="900px" src="<?php echo get_field('url_interactive') ?>" frameborder="0"></iframe>
				<?php } ?>

				<?php the_content(); ?>

			</article><!-- #post-## -->

		<?php endwhile; ?>
		
	</div>

<?php get_footer(); ?>