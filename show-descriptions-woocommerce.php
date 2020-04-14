<?php
/*
Plugin Name: Show descriptions for WooCommerce
Plugin URI: https://jamescollins.com.au/resources/show-descriptions-woocommerce
Description: Shows product short descriptions in the WooCommerce product archives
Version: 1.0
Author: James Collins
Author URI: https://jamescollins.com.au/
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

add_action( 'woocommerce_after_shop_loop_item_title', 'sdw_excerpt_in_product_archives', 6 );

/**
 * Show the product description
 */
function sdw_excerpt_in_product_archives() {
    the_excerpt();
}

