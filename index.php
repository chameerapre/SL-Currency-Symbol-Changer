<?php

/**
 * Plugin Name: SL Currency Symbol Changer
 * Plugin URI: https://origyn.company
 * Author: Origyn.Company
 * Author URI: https://origyn.company
 * Description: A simple plugin to change the symbol of sri lankan rupees (රු.) to (Rs.) in WooCommerce sites.
 * Version: 0.1.1
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * text-domain: ocotw
 */

defined('ABSPATH') or die('Hey, you have no access to this file');

add_filter('woocommerce_currency_symbol', 'slCurrencySymbolChange', 10, 2);

function slCurrencySymbolChange($currency_symbol, $currency) {

    switch ($currency) {
        case 'LKR':
            $currency_symbol = 'Rs.';
            break;
    }

    return $currency_symbol;
}
