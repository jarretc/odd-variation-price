<?php
/**
 * Plugin Name: Variation Header Price
 * Plugin URI: https://orangedotdevelopment.com
 * Description: Displays the variation price without having to expand the metabox.
 * Version: 1.0.0
 * Author: OrangeDotDevelopment
 * Author URI: https://orangedotdevelopment.com
 * Text Domain: odd-variation-price
*/

add_action( 'woocommerce_variation_header', function( \WP_Post $variation ) {
    $variation = wc_get_product( $variation->ID );
    $variation_price = wc_price( $variation->get_price() );

    if ( $variation_price ) {
        echo '<span class="odd-variation-header-price">' . $variation_price . '</span>';
    }
});