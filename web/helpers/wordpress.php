<?php

function get_wp_version( $wp_folder ) {
	preg_match("/'(.*?)'/", exec( "grep wp_version ".$wp_folder."/wp-includes/version.php" ), $matches);
	return $matches[1];
}

function get_wordpress_last_version_number() {
	$link = `curl http://wordpress.org | grep '<a class="button download-button button-large"'`;
	preg_match_all("/\<a.*href=\"(.*?)\".*?\>(.*)\<\/a\>+/", $link, $matches, PREG_SET_ORDER);
	$last_version = str_replace("Download&nbsp;WordPress&nbsp;", '', $matches[0][2]);
	return $last_version;
}

function is_wordpress( $site_folder ) {
	$site_fullname = WWW_DIR . '/' .$site_folder;
	if(
		file_exists($site_fullname.'/wp-config.php')
		&&
		file_exists($site_fullname.'/wp-admin/')
		&&
		file_exists($site_fullname.'/wp-includes/')
	) return true;
	else
		return false;
}