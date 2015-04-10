<?php
/**
 * The main content file
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="row">

        <div class="col col-xs-12 <?php if( get_field('title_ribbon') ) { echo 'ribbon'; } ?>">
            <h3><?php the_title(); ?></h3>
        </div> <!-- .col -->
    </div>

    <div class="row <?php if( get_field('two_columns') ) { echo 'split'; } ?>">

        <div class="col col-xs-12">
            <?php the_content(); ?>
        </div>
    </div> <!-- .col-xs-12 -->

</section>