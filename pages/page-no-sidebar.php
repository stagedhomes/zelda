<?php
/*
    Template Name: Full Page
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();

get_header(); ?>

<div class="container" style="padding: 40px 20px 40px 20px">
		<div class="row">
			<div class="col-md-12">
                <?php echo apply_filters( "the_content", $objThePost->post_content ); ?>
            </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /container -->

<?php get_footer();
