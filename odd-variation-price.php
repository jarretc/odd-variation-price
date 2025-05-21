<?php
/**
 * Plugin Name: Variation Header Price for WooCommerce
 * Plugin URI: https://orangedotdevelopment.com/software/wordpress/plugins/variation-header-price-for-woocommerce/
 * Description: Displays the variation price without having to expand the metabox.
 * Version: 1.0.0
 * Author: Jarret
 * Author URI: https://orangedotdevelopment.com
 * Text Domain: odd-variation-price
 * Requires Plugins: woocommerce
*/

add_action( 'woocommerce_variation_header', function( \WP_Post $variation ) {
    $variation = wc_get_product( $variation->ID );
    $variation_price = wc_price( $variation->get_price() );

    if ( $variation_price ) {
        echo '<span class="odd-variation-header-price">' . $variation_price . '</span>';
    }
});
