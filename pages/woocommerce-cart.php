<?php
/*
    Template Name: WooCommerce Cart
*/

get_header(); ?>

<div class="container" style="padding: 40px 20px 40px 20px">
		<div class="row">
			<div class="col-md-9 entry-content">
          <?php the_content(); ?>
      </div><!-- /col -->
      <aside class="col-md-3" style="margin-top: 20px;">
				<?php include_once(plugin_dir_path( __FILE__ ) . "../assets/partials/woocommerce-sidebar-nav.inc.php"); ?>
			</aside>
    </div><!-- /row -->
</div><!-- /container -->

<?php get_footer();
