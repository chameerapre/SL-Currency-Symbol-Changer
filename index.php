<?php
/**
 * Plugin Name: SL Currency Symbol Changer
 * Plugin URI: https://origynsystems.com/projects
 * Author: Origyn Systems
 * Author URI: https://origynsystems.com
 * Description: A simple plugin to change the symbol of sri lankan rupees (රු.) to (Rs.) in WooCommerce sites.
 * Version: 0.1.0
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * text-domain: ocotw
 */

add_filter('woocommerce_currency_symbol', 'slCurrencySymbolChangeByOS', 10,2);

function slCurrencySymbolChangeByOS( $currency_symbol, $currency ){
    
    switch( $currency ) {
        case 'LKR': $currency_symbol= 'Rs.';
        break;
    }
    
    return $currency_symbol;
}