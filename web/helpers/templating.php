<?php

function get_template( $template_name ) {
	require_once WEB_PATH."/templates/".$template_name.".php";
}
function get_header() {
	get_template( 'header' );
}
function get_footer() {
	get_template( 'footer' );
}