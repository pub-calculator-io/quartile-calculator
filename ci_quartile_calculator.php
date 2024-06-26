<?php
/*
Plugin Name: CI Quartile calculator
Plugin URI: https://www.calculator.io/quartile-calculator/
Description: The quartile calculator helps to find the first(Q1), second(Q2), and third(Q3) quartiles, interquartile range, minimum and maximum values, and range of a data set.
Version: 1.0.0
Author: Quartile Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_quartile_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Quartile Calculator by www.calculator.io";

function display_calcio_ci_quartile_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Quartile Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_quartile_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_quartile_calculator', 'display_calcio_ci_quartile_calculator' );