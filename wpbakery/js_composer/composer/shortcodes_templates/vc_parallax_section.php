<?php
$output = $title = $height = $background_image = $position ='';

extract(shortcode_atts(array(
	'title' => __("Section", "js_composer"),
	'height' => '',
	'background_image' => '',
	'position' => 'center'
), $atts));
$_image ="";
if($background_image != '' || $background_image != ' ') { 
	$_image = wp_get_attachment_image_src( $background_image, 'full');
}
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'parallax_content', $this->settings['base']);
$output .='<section style = "';
$output .= ($background_image !== '' || $background_image !== ' ') ? " background-image:url('" . $_image[0] . "');" : '';
$output .= '"';
$output .= ($height !='' || $height!=' ') ? 'data-height="' . $height . '"' : '';
$output .= '>';
$output .='<div class="' . $css_class . " " . $position . '">';

    $output .= wpb_js_remove_wpautop($content);
$output .= '</section>' . $this->endBlockComment('.wpb_parallax_section') . "\n";

echo $output;