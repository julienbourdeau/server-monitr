<?php

function get_list_of_website( $folder = WWW_DIR ) {
	$sites = array();
	foreach( glob($folder.'/*', GLOB_ONLYDIR ) as $site_folder ) {  
	    array_push( $sites, basename($site_folder) );  
	} 
	return $sites;
}

