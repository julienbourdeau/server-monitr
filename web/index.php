<?php 

require_once '../config.php';
require_once 'helpers/templating.php';
require_once 'helpers/general.php';
require_once 'helpers/wordpress.php';

$page = $_GET['page'];

switch ( $page ) {
	case 'dashboard':
		get_template('page', $page);
		break;
	case 'websites':
		get_template('page', $page);
		break;
	
	default:
		get_template('index');
		break;
}

