<?php
/*
Plugin Name: Quartile Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/quartile-calculator/
Description: Use our free Quartile Calculator to easily find Q1, Q2 (median), Q3, interquartile range (IQR), minimum, maximum, and dataset range in seconds.
Version: 1.0.0
Author: www.calculator.io / Quartile Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_quartile_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Quartile Calculator by www.calculator.io";

function calcio_quartile_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Quartile Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_quartile_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_quartile_calculator', 'calcio_quartile_calculator_shortcode' );