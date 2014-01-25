<?php

function get_wp_version( $wp_folder ) {
	preg_match("/'(.*?)'/", exec( "grep wp_version ".$wp_folder."/wp-includes/version.php" ), $matches);
	return $matches[1];
}
echo get_wp_version("/Users/julien/Sites/blog.julienbourdeau.com");