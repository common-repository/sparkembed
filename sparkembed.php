<?php
/**
Plugin Name: SparkEmbed
Plugin URI:  https://plugins.codecide.net/product/spe
Description: Embed a Spark Chart satellite survey using a shortcode
Version:     1.0
Author:      Codecide
Author URI:  https://plugins.codecide.net/
License: GPL2
Requirements: PHP <= 5.4, jQuery
*/

/**
USAGE:
  - use _[spark]https://preview.sparkchart.com/12345678[/spark]_ to embed a satellite survey using the default parameters

Configurable options (admin):
  - Enable/disable the plugin
*/

defined( 'ABSPATH' ) or exit;

define('sparkembed_pluginpath', dirname(__FILE__).'/');
define('sparkembed_pluginname', 'sparkembed');
require_once(sparkembed_pluginpath.sparkembed_pluginname.'.class.php');

/**
 * Returns the markup value for the iframe element
 * @param misc $atts Shortcode attributes
 * @param string $content The satellite's URL or ID
 * @return string The value formatted for display
 */
function sparkembed_shortcode($atts, $content=null) {
    if ( !(is_single() || is_page() || !is_admin() || !empty($content)) ) { return; }
    extract(shortcode_atts(['height'=>"",'width'=>"",'class'=>'','border_width'=>"",'border_style'=>'','border_color'=>'','padding'=>'','background_color'=>''], $atts),  EXTR_PREFIX_ALL, 'atts');
    $height = !empty($atts_height) ? 'height:'.sparkembed_addStyleUnits($atts_height).';' : '';
    $width = !empty($atts_width) ? 'width:'.sparkembed_addStyleUnits($atts_width).';' : 'width:100%;';
    $border_width = !empty($atts_border_width) ? 'border-width:'.sparkembed_addStyleUnits($atts_border_width).';' : '';
    $border_style = !empty($atts_border_style) ? 'border-style:'.$atts_border_style.';' : '';
    $border_color = !empty($atts_border_color) ? 'border-color:'.$atts_border_color.';' : '';
    $background_color = !empty($atts_background_color) ? 'background-color:'.$atts_background_color.';' : '';
    $padding = !empty($atts_padding) ? 'padding:'.sparkembed_addStyleUnits($atts_padding).';' : '';
    $class = !empty(atts_class) ? $atts_class.' ' : '';
    $markup = '<div id="spark-embed" class="'.$class.'spark-outer"><div class="spark-inner"><iframe src="'.$content.'" frameborder="0" style="'.$width.$height.$border_width.$border_style.$border_color.$padding.$background_color.'">Please upgrade your browser</iframe></div></div>';
    return $markup;
}


function sparkembed_addStyleUnits($el=null) {
    return ($el && is_numeric($el)) ? $el.'px': $el;
}

new sparkembed(); 