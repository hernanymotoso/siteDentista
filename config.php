<?php
require 'environment.php';
define("BASE_URL", "http://localhost/siteDentista");
global $config;
$config = array();
if(ENVIRONMENT == "development"){
	$config['dbname'] = 'sitedentista';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else{
    $config['dbname'] = 'sitedentista';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

?>