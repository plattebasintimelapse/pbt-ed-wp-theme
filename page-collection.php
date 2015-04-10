<?php
/**
 * Template Name: Lesson Collections
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php
			$url = wp_get_attachment_url( get_post_thumbnail_id() );
			$collection_page = get_field('collection_page');
		?>

		<section class="intro" id="intro" style="background-image: url(<?php echo $url; ?>)">
	        <div class="intro-wrapper">
	            <div class="row">
	                <div class="col-xs-12">
	                    <h1><?php the_title(); ?></h1>
	                </div>
	            </div>

	            <div class="row">
	                <div class="col-sm-7">
	                	<?php the_content(); ?>
	                </div>
	                <div class="col-sm-5 text-right">
	                    <h4>Learning Objects</h4>
	                    <div class="ghost-badge-group">
	                        <span><?php echo implode('</span><span> ', get_field('curriculum')); ?></span>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	<?php
		endwhile;
		wp_reset_query();
	?>

	<?php
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'meta_key'=> 'lesson_collection',
			'meta_value' => $collection_page,
			'orderby' => 'title',
			'order'   => 'ASC'
		);

		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	?>


	<?php get_template_part( 'partials/content', get_field('lesson_format') );
		
	?>

	

	<?php
		endwhile; endif;
		wp_reset_postdata();
	?>

<?php get_footer(); ?>
