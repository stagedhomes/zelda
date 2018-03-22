<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop');
?>
<div id="sm-woocommerce-single-product" class="container">
    <div class="row">        
        <div class="col-lg-9">
            <?php while (have_posts()) : the_post(); ?>

                <?php wc_get_template_part('content', 'single-product'); ?>

            <?php endwhile; // end of the loop. ?>
        </div>
      
        <aside class="col-md-3" style="margin-top: 20px;">
          <?php include_once(plugin_dir_path( __FILE__ ) . "../assets/partials/woocommerce-sidebar-nav.inc.php"); ?>
        </aside>
    </div>
</div>
<?php get_footer('shop');
