<?php

function get_template( $template, $template_name = null ) {
	if ( $template_name !== null) {
		$template .= "-".$template_name;
	}
	require_once WEB_PATH."/templates/".$template.".php";
}
function get_header() {
	get_template( 'header' );
}
function get_footer() {
	get_template( 'footer' );
}