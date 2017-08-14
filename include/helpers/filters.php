<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * WPBakery visual composer filter functions
 *
 * @package WPBakeryVisualComposer
 *
 * http://websitehouse.ir/learning/%D9%88%DB%8C%DA%98%D9%88%D8%A7%D9%84%20%DA%A9%D8%A7%D9%85%D9%BE%D9%88%D8%B2%D8%B1/%D8%A7%D8%B2-%DA%A9%D8%AC%D8%A7-%D8%A8%D8%A7%DB%8C%D8%AF-%D8%B4%D8%B1%D9%88%D8%B9-%DA%A9%D8%B1%D8%AFindex.php?title=Visual_Composer_Filters
 */

/**
 * This filter should be applied to all content elements titles
 *
 * $params['extraclass'] Extra class name will be added
 *
 *
 * To override content element title default html markup, paste this code in your theme's functions.php file
 * vc_filter: wpb_widget_title
 * add_filter('wpb_widget_title', 'override_widget_title', 10, 2);
 * function override_widget_title($output = '', $params = array('')) {
 *    $extraclass = (isset($params['extraclass'])) ? " ".$params['extraclass'] : "";
 *    return '<h1 class="entry-title'.$extraclass.'">'.$params['title'].'</h1>';
 * }
 *
 * @param array $params
 *
 * @return mixed|string|void
 */
function wpb_widget_title( $params = array( 'title' => '' ) ) {
	if ( '' === $params['title'] ) {
		return '';
	}

	$extraclass = ( isset( $params['extraclass'] ) ) ? ' ' . $params['extraclass'] : '';
	$output = '<h2 class="wpb_heading' . $extraclass . '">' . $params['title'] . '</h2>';

	return apply_filters( 'wpb_widget_title', $output, $params );
}

/*

Available filters in default.php
wpb_toggle_heading

Available filters in buttons.php
wpb_cta_text

Available filters in teaser_grid.php
vc_teaser_grid_title
vc_teaser_grid_thumbnail
vc_teaser_grid_content
vc_teaser_grid_carousel_arrows

*/
