<?php
define('WWW_ROOT', dirname(dirname(__FILE__)));
$directory = basename(WWW_ROOT);
$url = explode($directory, $_SERVER['REQUEST_URI']);
if(count($url) == 1){
	define('WEBROOT', '/');
}else{
	define('WEBROOT', $url[0] . 'CinApps/');    
}

define('IMAGES', WWW_ROOT . DIRECTORY_SEPARATOR . 'img');
