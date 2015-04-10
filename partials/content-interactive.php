<?php
/**
 * The content template for displaying interactive posts
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="row">

    	<div class="col col-xs-12 <?php if( get_field('title_ribbon') ) { echo 'ribbon'; } ?>">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    	</div> <!-- .col -->
    </div>

    <div class="row <?php if( get_field('two_columns') ) { echo 'split'; } ?>">

		<div class="col col-xs-12">
            <iframe width="100%" height="900px" src="<?php echo get_field('url_interactive') ?>" frameborder="0"></iframe>
        </div>
    </div> <!-- .col-xs-12 -->

</section>