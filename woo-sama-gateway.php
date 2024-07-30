<?php

if (!defined('ABSPATH')) {
    exit;
}
/*
 * Plugin Name: درگاه اعتباری پرداخت سما
 * Author: سامانه معاملات امن ایران (سما)
 * Description: این افزونه درگاه پرداخت اعتباری سما را به ووکامرس اضافه می کند.
 * Version: 1.0.0
 * Author URI: https://www.sama.ir
 * Author Email: info@sama.ir
 * Requires at least: 6.0.0
 * Requires PHP: 7.4
 * WC requires at least: 7.3
 * WC tested up to: 8.1.1
 */

define('WOO_SAMA_CREDIT_GATEWAY_DIR', trailingslashit(plugin_dir_path(__FILE__)));

require_once WOO_SAMA_CREDIT_GATEWAY_DIR.'action.php';
