<?php
/*
    Template Name: Full Page | Auto Paragraphs
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
// $objThePost = get_post();

get_header(); ?>

<div class="container" style="padding: 40px 20px 40px 20px">
		<div class="row">
			<div class="col-md-12 entry-content">
                <?php echo wpautop(get_the_content(), true); ?>
            </div><!-- /col -->
    </div><!-- /row -->
</div><!-- /container -->

<?php get_footer();

