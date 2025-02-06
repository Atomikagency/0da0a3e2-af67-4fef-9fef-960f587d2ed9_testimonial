<?php

/**
 * Plugin Name: Testimonial
 * Description: Add the capability to request feedback from your customers and display it on your website.
 * Version: 1.0.1
 * Author: AtomikAgency
 * Author URI: https://atomikagency.fr/
 */

define('TESTIMONIAL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('TESTIMONIAL_PLUGIN_URL', plugin_dir_url(__FILE__));

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

require_once TESTIMONIAL_PLUGIN_DIR . 'update-checker.php';