<?php
/**
 * The content template for displaying image posts
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="row">

        <div class="col col-xs-12 <?php if( get_field('title_ribbon') ) { echo 'ribbon'; } ?>">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
        </div> <!-- .col -->
    </div>

    <?php
        $align = get_field( 'col_align' );
        $size = get_field( 'col_size' );
        $image_col_size = '6';
        $content_col_size = '6';

        if ($size == 'large') { $image_col_size = '8'; $content_col_size = '4'; }
        else if ( $size == 'small' ) { $image_col_size = '4'; $content_col_size = '8'; }
        else { $image_col_size = '6'; $content_col_size = '6'; }
    ?>

    <div class="row">

		<?php if( $align == 'left' ) { ?>

            <div class="col col-sm-<?php echo $image_col_size; ?>">
                <?php the_post_thumbnail(); ?>
            </div>

            <div class="col col-sm-<?php echo $content_col_size; ?>">
                <?php the_content(); ?>
            </div>

        <?php } else { ?>

            <div class="col col-sm-<?php echo $content_col_size; ?>">
                <?php the_content(); ?>
            </div>

            <div class="col col-sm-<?php echo $image_col_size; ?>">
                <?php the_post_thumbnail(); ?>
            </div>

        <?php } ?>

    </div> <!-- .row -->

</section>