<?php
/**
 * The content template for displaying standard posts
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="row">

    	<div class="col col-xs-12 <?php if( get_field('title_ribbon') ) { echo 'ribbon'; } ?>">
            <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
    	</div> <!-- .col -->
    </div> <!-- .row -->

    <div class="row <?php if( get_field('two_columns') ) { echo 'split'; } ?>">

		<div class="col col-xs-12">
            <?php the_content(); ?>
        </div>
    </div> <!-- .row -->

    <div class="row section-meta">
        <div class="col col-xs-12">
            <button class="btn btn-icon pull-right" type="button" data-toggle="collapse" data-target="#commentsCollapse1" aria-expanded="false" aria-controls="commentsCollapse">
                <small>Comments</small><i class="fa fa-comment fa-lg"></i>
            </button>
        </div>
    </div><!-- .row -->

    <div class="row comments">
        <div class="col-xs-12">
            <div class="collapse" id="commentsCollapse1">
                <div class="well">
                    <h4>Comments for this section</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse obcaecati labore repellat odio magnam vero, beatae laborum commodi quia totam, reprehenderit officia consequatur aperiam a ducimus fugit consectetur. Delectus, nesciunt.</p>
                    <p>Nihil, laudantium quis accusamus odit reprehenderit autem explicabo natus dolores reiciendis eos, voluptatibus? Eaque suscipit maxime similique, commodi quo odio dolores laudantium amet molestiae, deleniti voluptatem quam, eos laboriosam et.</p>
                    <p>Facilis quo doloremque doloribus aut, id aliquid a ab commodi cumque quis ratione praesentium est optio, neque natus excepturi? Blanditiis eos pariatur non dolorem tempore? Ipsum nostrum magni, mollitia incidunt.</p>
                    <p>Atque suscipit hic in porro repellendus eveniet voluptatem cum modi, repellat ex, harum quos ea, vitae dolorum asperiores impedit molestiae et maiores saepe exercitationem? Illum cupiditate pariatur quod in doloribus.</p>
                    <p>Consequatur itaque, incidunt, illo, illum eius officia minus accusamus error voluptates dolorum, perspiciatis repellendus quidem architecto sed sit? Quidem reprehenderit quasi aliquid vitae? Laborum, sit nostrum cum minus! Ipsum, vel!</p>
                </div>
            </div>
        </div>
    </div>

</section>